<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
//     protected $except = [
//         'api/*',
//        '127.0.0.1:8000',
//        'https://mail-test-laravel.herokuapp.com'
// ,    ];
}
