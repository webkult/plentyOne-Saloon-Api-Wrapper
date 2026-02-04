<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List shipping package types
 *
 * Lists all shipping packages types.
 */
class ListShippingPackageTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/package_types";
	}


	public function __construct()
	{
	}
}
