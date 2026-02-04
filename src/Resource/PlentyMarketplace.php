<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\PlentyMarketplace\ChangePluginVisibility;
use PlentyOne\Api\Requests\PlentyMarketplace\PlentyMarketplaceLogin;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PlentyMarketplace extends BaseResource
{
	public function plentyMarketplaceLogin(): Response
	{
		return $this->connector->send(new PlentyMarketplaceLogin());
	}


	/**
	 * @param string $plentyId Cookie from a successful login.
	 */
	public function changePluginVisibility(string $plentyId): Response
	{
		return $this->connector->send(new ChangePluginVisibility($plentyId));
	}
}
