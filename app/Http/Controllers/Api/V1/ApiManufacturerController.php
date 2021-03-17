<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManufacturerRequest;
use App\Models\Manufacturer;

class ApiManufacturerController extends Controller
{
    public function store(ManufacturerRequest $request){
        $manufacturer_uids = [];
        foreach ($request->manufacturers as $request_manufacturer) {
            $manufacturer = Manufacturer::firstOrNew(['uid' =>  $request_manufacturer['id']]);
            $manufacturer->company = $request_manufacturer['company'];
            $manufacturer->email = $request_manufacturer['email'];
            $manufacturer->phone = $request_manufacturer['phone'];
            $manufacturer->address = $request_manufacturer['address'];
            $manufacturer->zipcode = $request_manufacturer['zipcode'];
            $manufacturer->city = $request_manufacturer['city'];
            $manufacturer->country = $request_manufacturer['country'];
            $manufacturer->save();
            $manufacturer_uids[] = $manufacturer->uid;
        }
        $manufacturers = Manufacturer::whereIn('uid', $manufacturer_uids)->get();
        return $this->jsonResponse($manufacturers);
    }
}
