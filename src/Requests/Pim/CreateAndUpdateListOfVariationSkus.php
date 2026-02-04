<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation skus
 *
 * Creates and updates a list of variation skus.
 */
class CreateAndUpdateListOfVariationSkus extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/skus";
	}


	public function __construct()
	{
	}
}
