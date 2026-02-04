<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a warehouse
 *
 * Creates a warehouse.
 */
class CreateWarehouse extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses";
	}


	public function __construct()
	{
	}
}
