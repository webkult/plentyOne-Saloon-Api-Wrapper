<?php

declare(strict_types=1);

namespace PlentyOne\Api;

use Saloon\Http\Connector;
use Saloon\Http\BaseResource as SaloonBaseResource;

class BaseResource extends SaloonBaseResource
{
    public function __construct(Connector $connector)
    {
        parent::__construct($connector);
    }
}
