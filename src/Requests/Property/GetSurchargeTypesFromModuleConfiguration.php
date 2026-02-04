<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get surcharge types from module configuration
 *
 * Gets surcharge types from module configuration.
 */
class GetSurchargeTypesFromModuleConfiguration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/groups/surcharge/types";
	}


	public function __construct()
	{
	}
}
