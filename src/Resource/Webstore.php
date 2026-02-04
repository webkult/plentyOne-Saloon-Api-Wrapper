<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Webstore\ListClientsStores;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Webstore extends BaseResource
{
	public function listClientsStores(): Response
	{
		return $this->connector->send(new ListClientsStores());
	}
}
