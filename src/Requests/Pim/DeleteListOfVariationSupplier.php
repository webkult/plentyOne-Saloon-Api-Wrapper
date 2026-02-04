<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation supplier
 *
 * Deletes a list of variation supplier.
 */
class DeleteListOfVariationSupplier extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/supplier";
	}


	public function __construct()
	{
	}
}
