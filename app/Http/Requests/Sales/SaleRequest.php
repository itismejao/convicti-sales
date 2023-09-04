<?php

namespace App\Http\Requests\Sales;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'value' => 'required|numeric',
            'data_hora' => 'date',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ];
    }
}