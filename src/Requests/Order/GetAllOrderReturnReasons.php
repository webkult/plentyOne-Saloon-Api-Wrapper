<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all order return reasons
 *
 * Gets all order return reasons.
 */
class GetAllOrderReturnReasons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/returns/reasons";
	}


	public function __construct()
	{
	}
}
