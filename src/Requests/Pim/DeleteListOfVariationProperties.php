<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation properties
 *
 * Deletes a list of variation properties.
 */
class DeleteListOfVariationProperties extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/properties";
	}


	public function __construct()
	{
	}
}
