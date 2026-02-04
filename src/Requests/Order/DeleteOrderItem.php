<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order item
 *
 * Deletes an order item. The ID of the order and the ID of the order item must be specified.
 */
class DeleteOrderItem extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/items/{$this->orderItemId}";
	}


	/**
	 * @param int $orderId The ID of the order that the item belongs to.
	 * @param int $orderItemId The ID of the order item to be deleted.
	 */
	public function __construct(
		protected int $orderId,
		protected int $orderItemId,
	) {
	}
}
