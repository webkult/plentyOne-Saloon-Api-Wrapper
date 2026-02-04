<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of property relations
 *
 * Updates a list of property relations. The ID of the each relation must be specified.
 */
class UpdateListOfPropertyRelations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations";
	}


	public function __construct()
	{
	}
}
