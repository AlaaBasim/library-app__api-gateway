<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService{
    use ConsumesExternalService;

    public $baseUri;

    protected $secret;

    public function __construct(){
        $this->baseUri = env('AUTHORS_SERVICE_BASE_URL');
        $this->secret = env('AUTHORS_SERVICE_SECRET');
    }


    public function obtainAuthors(){
        return $this->performRequest('GET', '/authors');
    }

    public function obtainAuthor($author){
        return $this->performRequest('GET', "/authors/{$author}");
    }


    public function createAuthor($data){
        return $this->performRequest('POST', '/authors', $data);
    }


    public function editAuthor($data, $author){
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }


    public function deleteAuthor($author){
        return $this->performRequest('DELETE', "/authors/{$author}");
    }
}
