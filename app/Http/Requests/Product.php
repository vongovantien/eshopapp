<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
            'name'=>'required',
            'image'=>'required'
        ];
    }

    public function message()
    {
        return [
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'file.required'=>'Hình không được để trống'
        ];
    }
}
