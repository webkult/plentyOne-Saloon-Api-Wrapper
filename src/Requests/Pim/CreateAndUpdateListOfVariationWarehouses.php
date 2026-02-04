<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation warehouses
 *
 * Creates and updates a list of variation warehouses.
 */
class CreateAndUpdateListOfVariationWarehouses extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/warehouses";
	}


	public function __construct()
	{
	}
}
