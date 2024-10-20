<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{




    public function index()
    {

        $company = Company::pluck("value", "key")->toArray();

        return view("index", compact("company"));

    }

    public function edit()
    {

        $company = Company::pluck("value", "key")->toArray();

        return view("edit", compact("company"));

    }

    public function update(Request $request)
    {


        Company::update_info($request);

        return redirect("/");


    }



}
