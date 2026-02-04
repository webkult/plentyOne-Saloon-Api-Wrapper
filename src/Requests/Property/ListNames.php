<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List names
 *
 * Lists names. Filter like propertyId can be provided.
 */
class ListNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/names";
	}


	public function __construct()
	{
	}
}
