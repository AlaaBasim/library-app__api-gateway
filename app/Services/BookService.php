<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = env('BOOKS_SERVICE_BASE_URL');
    }

    public function obtainBooks(){
        return  $this->performRequest('GET', '/books');
    }
}
