<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation properties
 *
 * Creates and updates a list of variation properties.
 */
class CreateAndUpdateListOfVariationProperties extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/properties";
	}


	public function __construct()
	{
	}
}
