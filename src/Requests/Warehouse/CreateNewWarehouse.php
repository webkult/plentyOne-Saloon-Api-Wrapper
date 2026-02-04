<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a new warehouse
 *
 * Creates a new warehouse.
 */
class CreateNewWarehouse extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses";
	}


	public function __construct()
	{
	}
}
