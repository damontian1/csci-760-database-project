<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DatabaseController extends Controller
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
        // $invoice_data  = DB::select("SELECT * FROM 'Order', 'Items', 'Customer' WHERE customer_id = item_id");
        // return response()->json($invoice_data);
        // return view("database_view", [
        //     'invoice_data' => $invoice_data
        // ]);
        return view("database_view");
    }
    public function database_actions_territory(Request $request)
    {
        DB::table('Territory')->insert([
            [
                'TerritoryName' => $request->input('TerritoryName')
            ]
        ]);

        return back()->with('success', 'Success!');
    }
    public function database_actions_sales_rep(Request $request)
    {
        // INSERT INTO SALES_REPS VALUES('12031', 'tom', 'hanks', '21 st.', 'new york', 'NY', '12313', 'kokok', 'jojoj', 23.2, 232.23, 34.22);
        DB::table('SalesRep')->insert([
            [
                'TerritoryNumber' => $request->input('TerritoryNumber'),
                'SalesRepName' => $request->input('SalesRepName'),
                'SalesRepAddress' => $request->input('SalesRepAddress'),
                'SalesRepCity' => $request->input('SalesRepCity'),
                'SalesRepState' => $request->input('SalesRepState'),
                'SalesRepZip' => $request->input('SalesRepZip'),
                'SalesRepMTDSales' => $request->input('SalesRepMTDSales'),
                'SalesRepYTDSales' => $request->input('SalesRepYTDSales'),
                'SalesRepMTDCommission' => $request->input('SalesRepMTDCommission'),
                'SalesRepYTDCommission' => $request->input('SalesRepYTDCommission'),
                'SalesRepCommissionRate' => $request->input('SalesRepCommissionRate')
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_customer(Request $request)
    {
        DB::table('Customer')->insert([
            [
                'customer_name' => $request->input('customer_name'),
                'customer_address' => $request->input('customer_address'),
                'customer_city' => $request->input('customer_city'),
                'customer_state' => $request->input('customer_state'),
                'customer_zip' => $request->input('customer_zip'),
                'customer_mtd_sales' => $request->input('customer_mtd_sales'),
                'customer_ytd_sales' => $request->input('customer_ytd_sales'),
                'customer_balance' => $request->input('customer_balance'),
                'customer_credit_limit' => $request->input('customer_credit_limit')
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_vendor(Request $request)
    {
        DB::table('Vendor')->insert([
            [
                'vendor_name' => $request->input('vendor_name'),
                'vendor_address' => $request->input('vendor_address'),
                'vendor_city' => $request->input('vendor_city'),
                'vendor_state' => $request->input('vendor_state'),
                'vendor_zip' => $request->input('vendor_zip')
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_item(Request $request)
    {
        DB::table('Items')->insert([
            [
                'item_description' => $request->input('item_description'),
                'item_price' => $request->input('item_price'),
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_order(Request $request)
    {
        DB::table('Order')->insert([
            [
                'customer_id' => $request->input('customer_id'),
                'item_id' => $request->input('item_id'),
            ]
        ]);
        return back()->with('success', 'Success!');
    }
}
