<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceiptRequest;
use App\Models\Receipt;


class ReceiptController extends Controller
{

    public function create(){

        return view('receipt.create');
    }

    public function store(ReceiptRequest $request){

    $author = $request->user_name;
    $title = $request->receipt_title;
    $category = $request->receipt_category;
    $description = $request->receipt_description;
    $img = null;

    if($request->file('receipt_img')){
        
        $img = $request->file('receipt_img')->store('media/img' , 'public');
    }





    Receipt::create([

        'title' => $title,
        'description' => $description,
        'category' => $category,
        'author' => $author, 
        'img' => $img

    ]);

    return redirect()->back()-with('creation_success', 'Receipt entered successfully');


    }

    public function index() {

        $receipts = Receipt::all();

        return view('/receipt/index', ['receipts' => $receipts]);

    }
}
