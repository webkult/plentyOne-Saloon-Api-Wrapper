<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all order statuses
 *
 * Gets all order statuses.
 */
class GetAllOrderStatuses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/statuses/all";
	}


	public function __construct()
	{
	}
}
