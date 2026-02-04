<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of attribute names
 *
 * Updates a list of attribute names.
 */
class UpdateListOfAttributeNames extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/names";
	}


	public function __construct()
	{
	}
}
