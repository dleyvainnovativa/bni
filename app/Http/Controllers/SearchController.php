<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public static function index()
    {
        $data = [];
        $companies = [];
        $companies = CompanyController::all();
        $categories = CategoriesController::all();
        $data["categories"] = $categories;
        $data["companies"] = $companies;
        // dd($data);
        return view("search", $data);
    }
}
