<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService{
    use ConsumesExternalService;

    public $baseUri;

    protected $secret; 

    public function __construct(){
        $this->baseUri = env('BOOKS_SERVICE_BASE_URL');
        $this->secret = env('BOOKS_SERVICE_SECRET');
    }

    public function obtainBooks(){
        return  $this->performRequest('GET', '/books');
    }


    public function obtainBook($book){
        return $this->performRequest('GET', "/books/{$book}");
    }


    public function createBook($data){
        return $this->performRequest('POST', '/books', $data);
    }


    public function editBook($data, $book){
        return $this->performRequest('PUT', "/books/{$book}", $data);
    }


    public function deleteBook($book){
        return $this->performRequest('DELETE', "/books/{$book}");
    }
}
