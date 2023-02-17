<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Stock extends BaseController
{
    public function index()
    {

        $data['title'] = 'Stock';

        return view('stock', $data);

    }


}