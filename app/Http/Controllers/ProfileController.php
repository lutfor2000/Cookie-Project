<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id){
        // Define variables
        $name = "Donald Trump";
        $age = 75;

        // Prepare data as an associative array
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Set the cookie variables as per the question
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME']; // Set the domain dynamically
        $secure = false;
        $httpOnly = true;

        // Create the cookie
        $cookie = cookie(
            $cookieName,
            $cookieValue,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );


        // Create the cookie
        $cookie = cookie(
            'access_token',   // Cookie name
            '123-XYZ',        // Cookie value
            1,                // Cookie duration in minutes
            '/',              // Cookie path
            $_SERVER['SERVER_NAME'], // Cookie domain
            true,              // HttpOnly flag
            false
        );

        return response()->json($data, 200)->cookie($cookie);
          

    }

    

}
