<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:events',
            'image' => 'required',
            'date' => 'required',
            'hour' => 'required',
            //'current_capacity' => 'required',
            'max_capacity' => 'required',
            //'location_id' => 'required',
        ];
    }
}
