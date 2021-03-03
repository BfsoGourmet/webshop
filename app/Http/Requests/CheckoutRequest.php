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
            'firstNameDelivery' => 'required',
            'lastNameDelivery' => 'required',
            'addressDelivery' => 'required',
            'cityDelivery' => 'required',
            'postCodeDelivery"' => 'required',
            'firstNameBilling' => 'required_if:hasDifferentAddress,on',
            'lastNameBilling' => 'required_if:hasDifferentAddress,on',
            'addressBilling' => 'required_if:hasDifferentAddress,on',
            'postCodeBilling' => 'required_if:hasDifferentAddress,on',
            'cityBilling' => 'required_if:hasDifferentAddress,on',




        ];
    }
}
