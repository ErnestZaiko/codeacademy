<?php
namespace Controller;

class Catalog
{
    public function show($id)
    {
        echo 'Catalog controller ID ' . $id;
    }


    public function all($id)
    {
        for($i = 0; $i < 10; $i++){
            echo 'a href="http://127.0.0.1:8000/catalog/show'.$i.'">Read more</a>';
            echo '<br>';
        }
    }

}