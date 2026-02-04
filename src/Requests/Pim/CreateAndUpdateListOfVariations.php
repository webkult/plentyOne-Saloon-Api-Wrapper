<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variations
 *
 * Creates and updates a list of variations.
 */
class CreateAndUpdateListOfVariations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/bases";
	}


	public function __construct()
	{
	}
}
