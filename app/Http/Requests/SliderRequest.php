<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title' => 'required|string|max:40',
            'descripton' => 'required|text|max:200',
            'read_more' => 'required|url',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ];
    }

    public function message(): array
    {
        return [
            'title.required' => 'please Enter Title',
            'description.required' => 'Here Fill Description',
            'read_more.required' => 'Enter Valid Url',
            'image.required'=> 'Enter here Just Image',
        ];
    }
}
