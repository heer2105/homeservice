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
        //
        "/api_register",
        "/api_login",
        '/api_prodByCat',
        "/api_addbooking",
        "/api_getbooking",
        "api_updatebooking",
        "/api_confirmbooking",
        "/getCouponFromCode",
        "/api_applycoupon",
        "/api_removebooking",
        "/api_clearcart",
        "/api_getBookinghistory",
        "/removewishlist",
        "/addwishlist",
        "/getwishlist",
        "/api_editprofile",
        "/api_data",
        "/getVersion",
        "/api_editpassword",
        "api_forgotapp",
        "/api_loginregister",
        "/api_wregister",
        "api_getbookingall",
        "/api_getbookingwid",
        "/api_getbookinguid",
        "/api_updateWorkerUsername",
        "/removewishlist",
        "/removewishlist1"
        
    ];
}