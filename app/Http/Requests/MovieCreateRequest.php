<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MovieCreateRequest extends Request
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
            'tag' => 'required|unique:tags,tag', 'title' => 'required',
            'image' => 'required',
            'synopsis' => 'required',
            'date' => 'required',
            'director' => 'required',
            'writer' => 'required',
            'actor' => 'required',
            'rating' => 'required',
            'categories' => 'required',
            
        ];
    }
}
