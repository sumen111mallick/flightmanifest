<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFlightRequest extends FormRequest
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
            'flight_no' => 'required|alpha_num|max:10',
            'aeroplane_id' => 'required',
            'carrier_name' => 'required',
            'departure' => 'required',
            'Arrival' => 'required',
            'd_time' => 'required',
            'a_time' => 'required',
            'terminal' => 'required|alpha_num|max:10',
        ];
    }
}
