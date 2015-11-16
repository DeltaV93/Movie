<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MovieRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required|date',
            'director' => 'required',
            'writer_1' => 'required',
            'actor_1' => 'required',
            'date_created' => 'required|date',
            'rating' => 'required',
            'categories' => 'required',
            
        ];
    }
}
