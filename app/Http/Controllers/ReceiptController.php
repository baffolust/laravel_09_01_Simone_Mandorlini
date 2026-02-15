<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{

    public function create(){

        return view('receipt.create');
    }

    public function store(Request $request){

    $author = $request->user_name;
    $title = $request->receipt_title;
    $category = $request->receipt_category;
    $description = $request->receipt_description;
    $img = $request->file('receipt_img')->store('media/img' , 'public');





    Receipt::create([

        'title' => $title,
        'description' => $description,
        'category' => $category,
        'author' => $author, 
        'img' => $img

    ]);

    return redirect()->back();


    }

    public function index() {

        $receipts = Receipt::all();

        return view('/receipt/index', ['receipts' => $receipts]);

    }
}
