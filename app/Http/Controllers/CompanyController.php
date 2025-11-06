<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public static function all()
    {
        $rows = DB::table('view_company_with_category')->get();

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
        return $companies;
    }

    public static function index($id_company)
    {
        $rows = DB::table('view_company_with_category')->where("company_id", $id_company)->get();
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
                    'logo' => $row['logo'],
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
        $company = array_values($companies);
        $data["company"] = $company[0];
        // dd($data);
        return view("business", $data);
    }
}
