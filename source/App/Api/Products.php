<?php

namespace Source\App\Api;

// use Source\Models\Course;
use Source\Models\Product;

class Courses extends Api
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
    }


    // public function createP (array $data) : void
    // {
    //    if(!empty($data)){
    //         $products = new Product($data["nome"],$data["price"],$data["description"],$data["categories_id"],$data["img"]);
    //         if(!$products->insert()){
    //             $response = [
    //                 "error" => [
    //                     "code" => 400,
    //                     "type" => "invalid_data",
    //                     "message" => $products->getMessage()
    //                 ]
    //             ];
    //             $this->back($response,400);
    //             return;
    //         }
    //         $response = [
    //             "product" => [
    //                 "id" => $products->getId(),
    //                 "nome" => $products->getNome(),
    //                 "price" => $products->getprice(),

    //                 // "img" => $products->getimg(),
    //             ]
    //         ];
    //         $this->back($response,201);
    //     }
    // }



    public function listProducts (array $data) : void
    {
        $products = (new Product())->selectAll();
        $this->back($products,200);
    }

    public function getProducts(array $data): void
    {
        
        $products = (new Product())->selectById($data["category_id"]);
        $this->back($products,200);
    }

    // public function listByCategory (array $data) : void
    // {
    //     $courses = (new Product())->selectByCategory($data["category_id"]);
    //     $this->back($courses,200);
    // }

    public function listCourses (array $data) : void
    {
        $courses = (new Product())->selectAll();
        $this->back($courses,200);
    }

}