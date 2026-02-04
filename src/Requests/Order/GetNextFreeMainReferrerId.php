<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get next free main referrer ID
 *
 * Gets the next free main referrer ID. If no more free main referrers are available, an exception is
 * thrown.
 */
class GetNextFreeMainReferrerId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/referrers/next_free_main";
	}


	public function __construct()
	{
	}
}
