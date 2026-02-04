<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all order repair reasons
 *
 * Gets all order repair reasons.
 */
class GetAllOrderRepairReasons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/repairs/reasons";
	}


	public function __construct()
	{
	}
}
