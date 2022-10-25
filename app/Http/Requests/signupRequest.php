<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.string'=>'vui long nhap them',
            'age.numeric'=>'vui long nhap dung tuoi, fake cc',
            'date.string'=>'vui long dien dung ngay thang',
            'phone.numeric'=>'vui long kiem tra lai so dien thoai',
            'web.string'=>'vui long kiem tra lai duong dan',
            'address.string'=>'vui long nhap lai dia chi'
        ];
    }
}
