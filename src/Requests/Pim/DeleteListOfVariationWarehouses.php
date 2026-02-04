<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation warehouses
 *
 * Deletes a list of variation warehouses.
 */
class DeleteListOfVariationWarehouses extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/warehouses";
	}


	public function __construct()
	{
	}
}
