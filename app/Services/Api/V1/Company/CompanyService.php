<?php

namespace App\Services\Api\V1\Company;

use App\Services\Api\V1\Traits\Consumer\External\ConsumerExternalService;

class CompanyService
{
    use ConsumerExternalService;

    protected $url, $token;

    public function __construct()
    {
        $this->url      = config( 'services.micro_01.url' );
        $this->token    = config( 'services.micro_01.token' );
    }

    public function getCompany( string $company )
    {
        return $this->request( 'get', "/v1/company/{$company}" );
    }

} // CompanyService
