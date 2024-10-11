<?php

namespace ManinderjeetDevout\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        try {
            
            $response = Http::get('https://zenquotes.io/api/random');
            $resData = $response->json();
            // dd($resData);
            return $resData[0]['q'] . ' -' . $resData[0]['a'];
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
}