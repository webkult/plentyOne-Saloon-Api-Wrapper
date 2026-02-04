<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Batch\MakeBatchRequests;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Batch extends BaseResource
{
	public function makeBatchRequests(): Response
	{
		return $this->connector->send(new MakeBatchRequests());
	}
}
