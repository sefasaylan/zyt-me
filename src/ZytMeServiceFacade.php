<?php

namespace ZytMe;

use Illuminate\Support\Facades\Http;

class ZytMeServiceFacade
{

    public static function shorten($url)
    {
        $urlForService = "http://zyt-me.local/generate";

        $response = Http::post($urlForService, [
            'public_key' => config("zytme.zytme_public_key"),
            'secret_key' => config("zytme.zytme_private_key"),
            'url' => $url
        ]);

        return $response->body();
    }

}