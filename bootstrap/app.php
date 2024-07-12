<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Midauth;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //prueba Si desea que un middleware se ejecute durante cada solicitud HTTP a su aplicación
        //$middleware->append(Midauth::class);
        $middleware -> alias([
            'mauth' => Midauth::class
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
