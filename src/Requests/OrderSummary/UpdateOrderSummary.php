<?php

namespace PlentyOne\Api\Requests\OrderSummary;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update order summary
 *
 * Updates an order summary. The ID of the order summary must be specified.
 */
class UpdateOrderSummary extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/order_summaries/{$this->orderSummaryId}";
	}


	/**
	 * @param int $orderSummaryId
	 */
	public function __construct(
		protected int $orderSummaryId,
	) {
	}
}
