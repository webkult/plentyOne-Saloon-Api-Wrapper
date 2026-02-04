<?php

namespace PlentyOne\Api\Requests\OrderSummary;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List unpaid order summaries
 *
 * Get all unpaid order summaries.
 */
class ListUnpaidOrderSummaries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/order_summaries/unpaid";
	}


	public function __construct()
	{
	}
}
