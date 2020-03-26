<?php

namespace App\Controllers;

use App\FormRequests\PartnerCreateRequest;
use App\Services\PartnerService;
use App\Mappers\Request\PartnerCreateRequestMapper;
use Illuminate\Http\JsonResponse;

class PartnerController
{
    public function create(PartnerCreateRequest $request, PartnerService $service)
    {
        $data = $request->validationData();

        $partnerCreateRequestMapper = new PartnerCreateRequestMapper($data['name'], $data['address']);

        $responseMapper = $service->create($partnerCreateRequestMapper);

        return new JsonResponse($responseMapper->getMessage(), $responseMapper->getStatus());
    }
}