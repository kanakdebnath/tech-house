<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'service_category_id' => 'required',
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'status' => 'required|numeric',
            'description' => 'nullable|string'
        ];
    }
}
