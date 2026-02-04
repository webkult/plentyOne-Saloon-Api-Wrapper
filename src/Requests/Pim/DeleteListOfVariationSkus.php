<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation skus
 *
 * Deletes a list of variation skus.
 */
class DeleteListOfVariationSkus extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/skus";
	}


	public function __construct()
	{
	}
}
