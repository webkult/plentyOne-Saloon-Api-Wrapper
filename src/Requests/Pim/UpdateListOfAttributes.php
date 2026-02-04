<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of attributes
 *
 * Updates a list of attributes.
 */
class UpdateListOfAttributes extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes";
	}


	public function __construct()
	{
	}
}
