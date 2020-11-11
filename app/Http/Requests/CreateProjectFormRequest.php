<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectFormRequest extends FormRequest
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
            'name' => 'required',
            'subtitle' => 'required',
            'image_url' => 'required|url',
            'project_url' => 'required|url',
            'description' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Полето Име е задолжително!',
            'subtitle.required' => 'Полето Поднаслов е задолжително!',
            'image_url.required' => 'Полето Слика е задолжително!',
            'image_url.url' => 'Полето Слика треба да е валидно URL!',
            'project_url.required' => 'Полето URL е задолжително!',
            'project_url.url' => 'Полето URL треба да е валидно URL',
            'description.required' => 'Полето Опис е задолжително!',
            'description.max' => 'Полето Опис може да има најмногу 200 карактери!'
        ];
    }
}
