<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        // Retrieve sales data from the database or other sources
        $sales = [
            [
                'id' => 1,
                'customer_name' => 'John Doe',
                'total_amount' => 50.00,
                'created_at' => '2023-04-20 15:30:00',
            ],
            [
                'id' => 2,
                'customer_name' => 'Jane Smith',
                'total_amount' => 100.00,
                'created_at' => '2023-04-19 12:00:00',
            ],
            // ...
        ];

        // Render the view with the sales data
        return view('sales.index', compact('sales'));
    }
}
