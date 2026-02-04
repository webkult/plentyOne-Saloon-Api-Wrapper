<?php

namespace PlentyOne\Api\Requests\OrderSummary;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List order summaries
 *
 * Lists order summaries.
 */
class ListOrderSummaries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/order_summaries";
	}


	public function __construct()
	{
	}
}
