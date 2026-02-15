<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'receipt_title'=>'required',
            'user_name'=>'required',
            'receipt_description'=>'min:50 | max:200',
            'receipt_category' =>'required',
        ];
    }

    public function messages(){

        return [

            'receipt_title.required'=>'Enter NAME of the Receipt',
            'receipt_description.min'=>'DESCRIPTION must be between 50 and 200 characters',
            'receipt_description.max'=>'DESCRIPTION must be between 50 and 200 characters',
            'user_name.required'=>'Enter AUTHOR NAME of the Receipt',
            'receipt_category.required'=>'Enter CATEGORY of the Receipt'

        ];

    }
}
