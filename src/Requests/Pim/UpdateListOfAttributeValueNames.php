<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of attribute value names
 *
 * Updates a list of attribute value names.
 */
class UpdateListOfAttributeValueNames extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/values/names";
	}


	public function __construct()
	{
	}
}
