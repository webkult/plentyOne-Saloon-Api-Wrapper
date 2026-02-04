<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the status history of an order
 *
 * Gets the status history of an order. The status history is a list that contains information of
 * status changes of the order. The ID of the order must be specified.
 */
class GetTheStatusHistoryOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/status-history";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
