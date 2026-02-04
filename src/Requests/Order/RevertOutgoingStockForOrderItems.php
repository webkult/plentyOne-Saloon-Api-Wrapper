<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Revert outgoing stock for order items
 *
 * <b>DEPRECATED: Use the following route: POST /rest/{orderType}/{orderId}/cancel_booking</b>
 * Reverts
 * the booking of the given order items of an order. The order items have to be specified.
 */
class RevertOutgoingStockForOrderItems extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/outgoing_stocks";
	}


	public function __construct()
	{
	}
}
