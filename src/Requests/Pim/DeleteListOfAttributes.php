<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of attributes
 *
 * Deletes a list of attributes.
 */
class DeleteListOfAttributes extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes";
	}


	public function __construct()
	{
	}
}
