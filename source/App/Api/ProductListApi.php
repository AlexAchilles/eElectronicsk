<?php

namespace Source\App\Api;

use Source\Models\Products;
use Exception;
use Source\Models\Product;

class ProductListApi
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
    }

    public function productsListApi (array $data) : void
    {
        $products = (new Product())->selectAll();
        $this->back($products,200);
    }

    // public function updatePhoto(array $data): void
    // {
    //     chdir("..");

    //     $image = new Image(CONF_UPLOAD_DIR, CONF_UPLOAD_IMAGE_DIR);

    //     $products = new Product();
    //     $products->findById($this->$products->getId());


    //     if ($_FILES) {
    //         try {
    //             $name = md5(uniqid(rand(), true));
    //             $upload = $image->upload($_FILES['photo'], $name, 1000);
    //             var_dump($upload);
    //             $cars->uploadPhoto($upload);
    //             $this->back(["photo" => $upload ], 200);
    //         } catch (Exception $e) {
    //             $this->back(["error" => $e->getMessage()], 400);
    //         }
    //     }
    // }



    public function updateCourse(array $data): void
    {
        var_dump($data);

        //$this->back($data,200);
    }
}