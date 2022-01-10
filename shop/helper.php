<?php

const URL = 'http://127.0.0.1:8000/';



function writeToCsv($data, $fileName)
{
    $file = fopen($fileName, 'a');
    foreach ($data as $element) {
        fputcsv($file, $element);
    }
    fclose($file);
}

function readFromCsv($fileName)
{
    $data = [];
    $file = fopen($fileName, 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetcsv($file);
            if (!empty($line)) {
                $data[] = $line;
            }
        }
        fclose($file);
    }

    return $data;
}

function debug($data)
{
    echo '<pre>';
    var_dump($data);
    die();
}

function prepearProducts($products)
{
    $header = $products[0];
    unset($products[0]);
    $data = [];
    foreach($products as $product){
        $data[] = [
            $header[0] => $product[0],
            $header[1] => $product[1],
            $header[2] => $product[2],
            $header[3] => $product[3],
            $header[4] => $product[4],
        ];
    }
    return $data;
}

function getProctUrl($id){
    return URL . 'product.php?id='.$id;
}

function getProductByID($id){
    $products = readFromCsv('products.csv');
    $products = prepearProducts($products);
    foreach ($products as $product){
        if($product['id'] == $id){
            return $product;
        }
    }
    return null;
}