<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function store(Request $request){

    $author = $request->user_name;
    $title = $request->receipt_title;
    $category = $request->receipt_category;
    $description = $request->receipt_description;



    Receipt::create([

        'title' => $title,
        'description' => $description,
        'category' => $category,
        'author' => $author

    ]);

    return redirect()->back();


    }

    public function index() {

        $receipts = Receipt::all();

        return view('/receipt/index', ['receipts' => $receipts]);

    }
}
