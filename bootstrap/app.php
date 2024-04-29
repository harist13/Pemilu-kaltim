<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Pegawai;
use App\Http\Middleware\Masyarakat;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['admin' => Admin::class, 'pegawai' => Pegawai::class, 'masyarakat' => Masyarakat::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

