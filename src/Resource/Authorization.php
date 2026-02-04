<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Authorization\GetAuthorizedUser;
use PlentyOne\Api\Requests\Authorization\GetAuthorizedUserWithUiConfig;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Authorization extends BaseResource
{
	public function getAuthorizedUser(): Response
	{
		return $this->connector->send(new GetAuthorizedUser());
	}


	public function getAuthorizedUserWithUiConfig(): Response
	{
		return $this->connector->send(new GetAuthorizedUserWithUiConfig());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getAuthorizedUserDuplicate1(): Response
	{
		return $this->connector->send(new GetAuthorizedUser());
	}
}
