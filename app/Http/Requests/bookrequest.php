<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookrequest extends FormRequest
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
            'price'       => 'required|numeric',
            'klmet'       => 'required|numeric',
            'Date'          => 'required|date',
            'name'       => 'required',
            'address'    => 'required',
            'note'       => 'required',
            'begin_journey'  => 'required',
            'end_journey'  => 'required',
        ];
    }


        function messages() {
        return [
            'name.required'         => 'Vui lòng nhập tên của bạn!',
            'address.required'         => 'Vui lòng nhập địa chỉ của bạn!',
            'note.required'         => 'Vui lòng nhập mô tả về sản phẩm của bạn!',
            'begin_journey.required'         => 'Vui lòng nhập điểm bắt đầu của bạn!',
            'end_journey.required'        => 'Vui lòng nhập điểm kết thúc của bạn!',
            'klmet.numeric'         => 'Giá phải là số!',
            'price.numeric'         => 'Giá phải là số!',
        
        ];}
    
}