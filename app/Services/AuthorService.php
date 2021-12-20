<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = env('AUTHORS_SERVICE_BASE_URL');
    }


    public function obtainAuthors(){

        // return $this->baseUri;
        return $this->performRequest('GET', '/authors');
    }
}
