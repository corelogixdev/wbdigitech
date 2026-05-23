<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
        'role' => RoleMiddleware::class,
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {

    $exceptions->render(function (Throwable $e, $request) {

        if (config('app.debug')) {
            return null; // Keep Laravel's detailed error screen in development
        }

        $code = $e instanceof HttpExceptionInterface
            ? $e->getStatusCode()
            : 500;

        return response()->view(
            'pages.errors.error',
            compact('code'),
            $code
        );
    });

})->create();
