<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update one or multiple property amazon
 *
 * Updates one or multiple property amazon
 */
class UpdateOneOrMultiplePropertyAmazon extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/amazons";
	}


	public function __construct()
	{
	}
}
