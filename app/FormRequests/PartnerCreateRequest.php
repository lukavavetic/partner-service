<?php

namespace App\FormRequests;

class PartnerCreateRequest
{
    public function rules() : array
    {
        return [
            'name'    => ['required'],
            'address' => ['required'],
        ];
    }

    public function errorCodes() : array
    {
        return [
            'name.required'    => "ERR_EMPTY_ID",
            'address.required' => "ERR_EMPTY_DATE",
        ];
    }

    public function validationData() : array
    {
        $input = [
            'name'    => cleanup($this->input('name')),
            'address' => cleanup($this->input('address')),
        ];

        return $input;
    }
}