<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all order repair status
 *
 * Gets all order repair status.
 */
class GetAllOrderRepairStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/repairs/status";
	}


	public function __construct()
	{
	}
}
