<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpertiseRequest extends FormRequest
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
            // 'short_title' => 'required|string|max:255',
            // 'title' => 'required|string|max:255',
            'skill_name' => 'required|string|max:255',
            'skill_percent' => 'required|numeric',
            'status' => 'required',
        ];
    }
}