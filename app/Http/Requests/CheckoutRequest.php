<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class OrderRequest
 *
 * @package App\Http\Requests
 */
class CheckoutRequest extends FormRequest
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
            'firstNameDelivery' => 'required|max:100',
            'lastNameDelivery' => 'required|max:100',
            'addressDelivery' => 'required|max:100',
            'postCodeDelivery"' => 'required|max:4',
            'cityDelivery' => 'required|max:100',
            'firstNameBilling' => 'required_with:hasDifferentAddress,on|max:100',
            'lastNameBilling' => 'required_with:hasDifferentAddress,on|max:100',
            'addressBilling' => 'required_with:hasDifferentAddress,on|max:100',
            'postCodeBilling' => 'required_with:hasDifferentAddress,on|max:4',
            'cityBilling' => 'required_with:hasDifferentAddress,on|max:100',




        ];
    }
}
