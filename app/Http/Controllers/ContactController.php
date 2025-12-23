<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        // 1️⃣ Validate input
        $validator = Validator::make($request->all(), [
            'sinunimi'       => 'required|string|max:255',
            'email'          => 'required|email',
            'pealkiri'       => 'nullable|string|max:255',
            'inputtext'      => 'required|string',
            'recaptcha_token'=> 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('taname')
                ->withErrors($validator)
                ->withInput();
        }

        // 2️⃣ reCAPTCHA v3 verification (SERVER SIDE)
        try {
            $recaptchaSecret = '6LduzjQsAAAAAD5PrRly6imrMFHpV8wf4Qy3oBWX';

            $response = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => $recaptchaSecret,
                    'response' => $request->recaptcha_token,
                    'remoteip' => $request->ip(),
                ]
            );

            $result = $response->json();

            if (
                !($result['success'] ?? false) ||
                ($result['score'] ?? 0) < 0.5 ||
                ($result['action'] ?? '') !== 'contact'
            ) {
                Log::warning('reCAPTCHA failed', $result);

                return redirect()->route('taname')
                    ->with('error', 'Robotituvastus ebaõnnestus. Palun proovi uuesti.');
            }
        } catch (Exception $e) {
            Log::error('reCAPTCHA error: ' . $e->getMessage());

            return redirect()->route('taname')
                ->with('error', 'Turvakontroll ebaõnnestus. Palun proovi hiljem.');
        }

        // 3️⃣ Send email
        try {
            Mail::to('tanel@kuttesepp.ee')
                ->send(new ContactMail($request->all()));

            return redirect()->route('taname')
                ->with('success', 'Teade saadetud. Täname!');
        } catch (Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());

            return redirect()->route('taname')
                ->with('error', 'Teate saatmine ebaõnnestus. Palun proovige hiljem uuesti.');
        }
    }

    public function taname()
    {
        return view('pages.taname');
    }
}
