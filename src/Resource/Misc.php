<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Misc\GetRestTodoById;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Misc extends BaseResource
{
	public function getRestTodoById(): Response
	{
		return $this->connector->send(new GetRestTodoById());
	}
}
