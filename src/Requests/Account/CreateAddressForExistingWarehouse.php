<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create address for existing warehouse
 *
 * Creates an address for an existing warehouse.
 */
class CreateAddressForExistingWarehouse extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/addresses";
	}


	public function __construct()
	{
	}
}
