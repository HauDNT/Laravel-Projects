<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($id) {
        // return "Product infor";
        return view("products.show", array('id' => $id));
    }

    function create() {
        // return "Add new product";
        return view("products.create");
    }

    function update($id) {
        // return "Update product has id:".$id;
        return view("products.update", array('id' => $id));
    }

    function destroy($id) {
        return view("products.destroy", array('id' => $id));
    }
}
