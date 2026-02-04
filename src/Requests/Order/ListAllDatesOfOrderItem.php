<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all dates of an order item
 *
 * <b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b>
 * Lists all dates of an order
 * item. The ID of the order item must be specified.
 */
class ListAllDatesOfOrderItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/dates";
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 */
	public function __construct(
		protected int $orderItemId,
	) {
	}
}
