<?php

namespace PlentyOne\Api\Requests\OrderSummary;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create order summary
 *
 * Creates an order summary.
 */
class CreateOrderSummary extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/order_summaries";
	}


	public function __construct()
	{
	}
}
