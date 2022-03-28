<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'title' => 'sometimes|string|max:255',
            'director' => 'sometimes|string|max:255',
            'image_url' => 'sometimes|string|max:255',
            'duration' => 'sometimes|integer|min:0',
            'release_date' => 'sometimes|date',
            'genre' => 'sometimes|string|max:255',
        ];
    }
}
