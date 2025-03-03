<?php

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Foundation\Application;
use App\Http\Middleware\CustomThrottle;


use app\http\Middleware\CustomThrottleResponse;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        //Siin saad kas uusi middlewaresid registreerida või modifitseerida olemasolevaid

        //$middleware->redirectGuestsTo('/login1'); võimaldab muuta middleware auth redirectimist kui kasutaja ei ole autoriseeritud
       // $middleware->append(CustomThrottle::class); Registreerib CustomThrottle middleware klassi

    })
    ->withExceptions(function (Exceptions $exceptions) {

        //Siia lisad oma custom made exceptioni vastused, kui saad veakoodi 429 siis liigud tagasi koos antud sõnumiga

        $exceptions->respond(function ($response) {
            if ($response instanceof Illuminate\Http\Response || $response instanceof Illuminate\Http\RedirectResponse) {
            if ($response->getStatusCode() === 429) {
                return back()->withErrors([
                    'message' => 'Liiga palju katseid, proovi hiljem uuesti.',
                ]);
            }}

            return $response;
        });
    })->create();
