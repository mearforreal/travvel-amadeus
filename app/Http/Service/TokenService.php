<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\Http;

class TokenService
{
    public function fetchToken(){
        $response = Http::asForm()->post('https://test.travel.api.amadeus.com/v1/security/oauth2/token', [
            'grant_type' => 'client_credentials',
            'client_id' => env('CLIENT_ID'),
            'client_secret' => env('CLIENT_SECRET'),
            'guest_office_id'=> env('GUEST_OFFICE_ID')
        ])->body();

        return json_decode($response);
    }

}
