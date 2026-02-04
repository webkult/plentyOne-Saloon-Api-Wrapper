<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get order types in string format
 *
 * Returns a list of order types in string format <caption,value>
 */
class GetOrderTypesInStringFormat extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/order-types";
	}


	public function __construct()
	{
	}
}
