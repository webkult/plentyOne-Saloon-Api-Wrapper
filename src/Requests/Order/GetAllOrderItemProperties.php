<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all order item properties
 *
 * <b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b>
 * Gets all order item
 * properties for one order item. The order item ID must be specified.
 */
class GetAllOrderItemProperties extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/properties";
	}


	/**
	 * @param int $orderItemId The order item ID.
	 */
	public function __construct(
		protected int $orderItemId,
	) {
	}
}
