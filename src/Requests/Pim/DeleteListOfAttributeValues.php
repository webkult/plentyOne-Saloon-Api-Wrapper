<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of attribute values
 *
 * Deletes a list of attribute values.
 */
class DeleteListOfAttributeValues extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/values";
	}


	public function __construct()
	{
	}
}
