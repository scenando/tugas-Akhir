<?php

use Illuminate\Support\Facades\Route;


function set_active($uri, $output = 'active open')
{
    if (is_array($uri)) {
        foreach ($uri as $u) {
            if (Route::is($u)) {
                return $output;
            }
        }
    } else {
        if (Route::is($uri)) {
            return $output;
        }
    }
}

// function setactive($uri, $output = 'active open')
// {
//     if (is_array($uri)) {
//         foreach ($uri as $u) {
//             if (Route::is($u)) {
//                 return $output;
//             }
//         }
//     } else {
//         if (Route::is($uri)) {
//             return $output;
//         }
//     }
// }
