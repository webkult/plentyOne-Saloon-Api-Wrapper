<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create a list of variations and their related data
 *
 * Creates a list of variations and their related data.
 */
class CreateListOfVariationsAndTheirRelatedData extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations";
	}


	public function __construct()
	{
	}
}
