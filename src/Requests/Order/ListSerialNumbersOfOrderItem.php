<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List serial numbers of an order item
 *
 * Lists all serial numbers of an order item. The ID of the order and the ID of the order item must be
 * specified.
 */
class ListSerialNumbersOfOrderItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/items/{$this->orderItemId}/serialNumbers";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderItemId The ID of the order item
	 */
	public function __construct(
		protected int $orderId,
		protected int $orderItemId,
	) {
	}
}
