<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'from_date'=>'required',
            'ret_date'=>'required',
            'price_booking'=>'required',
            'status'=>'required',
            'user_id'=>'required',
            'car_id'=>'required'
        ];
    }
}
