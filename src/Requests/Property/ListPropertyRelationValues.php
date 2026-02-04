<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property relation values
 *
 * Lists property relation values.
 */
class ListPropertyRelationValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations/values";
	}


	public function __construct()
	{
	}
}
