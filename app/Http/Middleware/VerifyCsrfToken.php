<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'admin-panel/price-market/save-row-hotel',
        'admin-panel/price-market/save-row-golf',
        'admin-panel/price-market/save-row-car',
        'admin-panel/package/select-hotel',
        'admin-panel/package/select-car',
        'admin-panel/package/select-golf',
        'admin-panel/package/select-other',
        'admin-panel/package/save-hotel',
    ];
}
