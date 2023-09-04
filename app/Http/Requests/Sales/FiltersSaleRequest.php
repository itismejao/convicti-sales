<?php

namespace App\Http\Requests\Sales;

use Illuminate\Foundation\Http\FormRequest;

class FiltersSaleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'start' => 'date',
            'end' => 'date',
            'seller_id' => 'integer|exists:sellers,id',
            'branch_id' => 'integer|exists:branchs,id',
            'directorate_id' => 'integer|exists:directorates,id',
        ];
    }
}