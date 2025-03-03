<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    
    public function sendMail(Request $request)
    {
        // Manually validate the request without auto-redirecting
        $validator = Validator::make($request->all(), [
            'sinunimi' => 'required|string|max:255',
            'email' => 'required|email',
            'pealkiri' => 'nullable|string|max:255',
            'inputtext' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with errors and input, adding the #contact hash in the URL
            return redirect()->route('taname')
                            ->withErrors($validator)
                            ->withInput();
        }

        // Proceed to send the email if validation passes
        try {
            // Send the email
            Mail::to('tanel@ahjumees.ee')->send(new ContactMail($request->all()));
            
            return redirect()->route('taname')->with('success', 'Teade saadetud. Täname!');
        } catch (\Exception $e) {
            // Log the error and return an error message
            Log::error('Email sending failed: ' . $e->getMessage());
            
           // Redirect to the "taname" page with an error message
        return redirect()->route('taname')->with('error', 'Teate saatmine ebaõnnestus. Palun proovige hiljem uuesti.');
        }
    }

    public function taname()
    {
        return view('pages.taname');
    }

 

}

