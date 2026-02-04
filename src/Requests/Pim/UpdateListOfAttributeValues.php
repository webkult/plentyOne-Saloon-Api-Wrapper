<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of attribute values
 *
 * Updates a list of attribute values.
 */
class UpdateListOfAttributeValues extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/values";
	}


	public function __construct()
	{
	}
}
