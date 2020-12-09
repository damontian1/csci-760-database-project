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
        // $TerritoryList  = DB::select("SELECT * FROM 'Territory'");
        $TerritoryList  = DB::table('Territory')->get();
        $SalesRepList  = DB::table('SalesRep')->get();
        $CustomerList  = DB::table('Customer')->get();
        $OrderList  = DB::table('Order')->get();
        $PartList  = DB::table('Part')->get();

        $OpenOrders  = DB::table('Part')
            ->join('OrderPart', function ($join) {
                $join->on('Part.PartNumber', '=', 'OrderPart.PartNumber');
            })
            ->join('Order', function ($join) {
                $join->on('Order.OrderNumber', '=', 'OrderPart.OrderNumber')
                ->where('OrderStatus', '=', 'open');
            })
            ->join('Customer', function ($join) {
                $join->on('Order.CustomerNumber', '=', 'Customer.CustomerNumber');
            })
            ->get();

        $Invoices  = DB::table('Part')
            ->join('OrderPart', function ($join) {
                $join->on('Part.PartNumber', '=', 'OrderPart.PartNumber');
            })
            ->join('Order', function ($join) {
                $join->on('Order.OrderNumber', '=', 'OrderPart.OrderNumber')
                ->where('OrderStatus', '=', 'close');
            })
            ->join('Customer', function ($join) {
                $join->on('Order.CustomerNumber', '=', 'Customer.CustomerNumber');
            })
            ->get();
        // dd($Invoices);
        return view("database_view", [
            'TerritoryList' => $TerritoryList,
            'SalesRepList' => $SalesRepList,
            'CustomerList' => $CustomerList,
            'OrderList' => $OrderList,
            'PartList' => $PartList,
            'OpenOrders' => $OpenOrders,
            'Invoices' => $Invoices,
        ]);
    }
    public function database_view_invoice(Request $request, $id)
    {
        $Invoices = DB::table('Order')
            ->where('Order.OrderStatus', '=', 'close')
            ->where('Order.OrderNumber', '=', $id)
            ->join('OrderPart', 'OrderPart.OrderNumber', '=', 'Order.OrderNumber')
            ->join('Customer', 'Customer.CustomerNumber', '=', 'Order.CustomerNumber')
            ->get();

        return view("database_view_invoice", [
            'Invoices' => $Invoices,
        ]);
        // $Invoices = DB::table('Customer')
        //     ->join('Order', function ($join) use ($id) {
        //         $join->on('Order.OrderNumber', '=', $id);
        //         // ->where('OrderStatus', '=', 'close');
        //     })
        //     ->join('OrderPart', function ($join) {
        //         $join->on('Part.PartNumber', '=', 'OrderPart.PartNumber');
        //     })
        //     ->join('Customer', function ($join) {
        //         $join->on('Order.CustomerNumber', '=', 'Customer.CustomerNumber');
        //     })
        //     ->get();
            // dd($Invoices);
        // return $id;
        // $test = DB::table('Order')
        //     ->where('OrderNumber', '=', $request->input('OrderNumber'))
        //     ->update([
        //         'OrderStatus' => $request->input('OrderStatus'),
        //     ]);
        // return back()->with('success', 'Success!');
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

                'SalesRepNumber' => $request->input('SalesRepNumber'),
                'CustomerFirstName' => $request->input('CustomerFirstName'),
                'CustomerLastName' => $request->input('CustomerLastName'),
                'CustomerAddress' => $request->input('CustomerAddress'),
                'CustomerCity' => $request->input('CustomerCity'),
                'CustomerState' => $request->input('CustomerState'),
                'CustomerZip' => $request->input('CustomerZip'),
                'CustomerMTDSales' => $request->input('CustomerMTDSales'),
                'CustomerYTDSales' => $request->input('CustomerYTDSales'),
                'CurrentBalance' => $request->input('CurrentBalance'),
                'CreditLimit' => $request->input('CreditLimit'),
                'CustomerShipFirstName' => $request->input('CustomerShipFirstName'),
                'CustomerShipLastName' => $request->input('CustomerShipLastName'),
                'CustomerShipAddress' => $request->input('CustomerShipAddress'),
                'CustomerShipCity' => $request->input('CustomerShipCity'),
                'CustomerShipState' => $request->input('CustomerShipState'),
                'CustomerShipZip' => $request->input('CustomerShipZip'),
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_part(Request $request)
    {
        DB::table('Part')->insert([
            [
                'PartDescription' => $request->input('PartDescription'),
                'PartPrice' => $request->input('PartPrice'),
                'PartMTDSales' => $request->input('PartMTDSales'),
                'PartYTDSales' => $request->input('PartYTDSales'),
                'UnitsOnHand' => $request->input('UnitsOnHand'),
                'UnitsAllocated' => $request->input('UnitsAllocated'),
                'RecorderPoint' => $request->input('RecorderPoint'),
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_vendor(Request $request)
    {
        DB::table('Vendor')->insert([
            [
                'VendorName' => $request->input('VendorName'),
                'VendorAddress' => $request->input('VendorAddress'),
                'VendorCity' => $request->input('VendorCity'),
                'VendorState' => $request->input('VendorState'),
                'VendorZip' => $request->input('VendorZip')
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_order(Request $request)
    {
        $id = DB::table('Order')->insertGetId(
            [
                'OrderDate' => $request->input('OrderDate'),
                'CustomerNumber' => $request->input('CustomerNumber'),
                'CustomerPONumber' => $request->input('CustomerPONumber'),
                'OrderStatus' => "open",
            ]
        );
        DB::table('OrderPart')->insert([
            [
                'OrderNumber' => $id,
                'PartNumber' => $request->input('PartNumber'),
                'NumberOrdered' => $request->input('NumberOrdered'),
            ]
        ]);
        return back()->with('success', 'Success!');
    }
    public function database_actions_order_status(Request $request)
    {
        $test = DB::table('Order')
            ->where('OrderNumber', '=', $request->input('OrderNumber'))
            ->update([
                'OrderStatus' => $request->input('OrderStatus'),
            ]);
        return back()->with('success', 'Success!');
    }
}
