<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationAttendRequest extends FormRequest
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
            'userCode'     =>'required|exists:registrations,user_code',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if( $validator->fails() ) {
            return back()->with('info',$validator->errors()->first())->withInput();
        }
    }
}
