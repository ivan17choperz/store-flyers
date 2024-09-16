<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json([
            'listado de ordenes' => ' listado de ordenes',
        ]);
    }

    public function store(Request $req)
    {

        return dump($req->all());
    }

    public function createOrder(Request $req)
    {

        $data = $req->all();

        foreach ($data['products'] as $product) {
            dump($product);
        }

        return response()->json([
            "status" => "",
            "msg" => "orden creada"
        ]);
    }

    
}
