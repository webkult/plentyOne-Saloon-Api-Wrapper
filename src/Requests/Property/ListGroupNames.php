<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List group names
 *
 * Lists group names. Filters like propertyGroupId and lang can be provided.
 */
class ListGroupNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/groups/names";
	}


	public function __construct()
	{
	}
}
