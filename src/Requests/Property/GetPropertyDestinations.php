<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property destinations
 *
 * Returns a json with the destinations processed: data from providers and translations.
 */
class GetPropertyDestinations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/destinations";
	}


	public function __construct()
	{
	}
}
