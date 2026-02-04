<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all order return status
 *
 * Gets all order return status.
 */
class GetAllOrderReturnStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/returns/status";
	}


	public function __construct()
	{
	}
}
