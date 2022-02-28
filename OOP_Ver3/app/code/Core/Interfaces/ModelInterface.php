<?php

namespace Core\Interfaces;

interface ModelInterface
{
    public const TABLE = '';
    
    public function load($id);

    public function assignData();
}