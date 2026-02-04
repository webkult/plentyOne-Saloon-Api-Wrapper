<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get group types from module configuration
 *
 * Gets group types from module configuration.
 */
class GetGroupTypesFromModuleConfiguration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/groups/types";
	}


	public function __construct()
	{
	}
}
