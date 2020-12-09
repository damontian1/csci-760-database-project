<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view("test");
    }

    public function database_view(Request $request)
    {
        return view("database_view");
    }
    public function database_actions_territory(Request $request)
    {
        $input_name = $request->input('input_name');
        $query = DB::select("INSERT INTO TERRITORY VALUES (NULL, '$input_name')");
        return back()->with('success', 'Success!');
        // return redirect('user/login');
        // return $input_name;
        // $number = $request->input('number');
        // $query = DB::select("SELECT * FROM 'Sales Rep' WHERE ID = $title");
        // return response()->json($name);
    }
    public function database_actions_sales_rep(Request $request)
    {
        $input_name = $request->input('input_name');
        $query = DB::select("INSERT INTO TERRITORY VALUES (NULL, '$input_name')");
        return back()->with('success', 'Success!');
        // return redirect('user/login');
        // return $input_name;
        // $number = $request->input('number');
        // $query = DB::select("SELECT * FROM 'Sales Rep' WHERE ID = $title");
        // return response()->json($name);
    }
}
