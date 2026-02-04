<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update multiple property relation value
 *
 * Updates multiple property relation value
 */
class UpdateMultiplePropertyRelationValue extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations/values";
	}


	public function __construct()
	{
	}
}
