<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of attribute names
 *
 * Deletes a list of attribute names.
 */
class DeleteListOfAttributeNames extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/names";
	}


	public function __construct()
	{
	}
}
