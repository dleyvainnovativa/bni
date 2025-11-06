<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index()
    {
        $categories = CategoriesController::all();
        $data["categories"] = $categories;
        return view("main", $data);
    }
}
