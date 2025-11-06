<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public static function all()
    {
        $categories = [];
        $list = DB::table('view_category_company_count')->get();
        foreach ($list as $key => $category) {
            $category = get_object_vars($category);
            array_push($categories, $category);
        }
        return $categories;
    }

    public static function index($id_category)
    {
        $data = [];
        $companies = [];
        $category = DB::table('view_category_company_count')->where('category_id', $id_category)->first();
        $category = (array) $category;



        $rows = DB::table('view_company_with_category')->where("category_id", $id_category)->get();

        $companies = [];

        foreach ($rows as $row) {
            $row = (array) $row; // convert to array

            $id = $row['company_id'];

            // if this company is not in the array, create it
            if (!isset($companies[$id])) {
                $companies[$id] = [
                    'id' => $row['company_id'],
                    'name' => $row['company_name'],
                    'founder' => $row['founder'],
                    'about_us' => $row['about_us'],
                    'location_text' => $row['location_text'],
                    'mail' => $row['mail'],
                    'phone' => $row['phone'],
                    'banner' => $row['banner'],
                    'categories' => [],
                ];
            }

            // add the category if it exists
            if (!empty($row['category_id'])) {
                $companies[$id]['categories'][] = [
                    'id' => $row['category_id'],
                    'name' => $row['category_name']
                ];
            }
        }

        // reindex array to remove numeric keys
        $companies = array_values($companies);
        $data["companies"] = $companies;
        $data["category"] = $category;


        // dd($data);
        return view("category", $data);
    }
}
