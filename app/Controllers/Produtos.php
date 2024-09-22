<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Produtos extends Controller
{
    public function index()
    {
        return "Index Produtos";
    }

    public function novo()
    {
        return "Novo produto";
    }
}
?>