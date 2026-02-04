<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create delivery orders automatically for all order items
 *
 * Create delivery orders automatically for all order items. The order ID must be specified.
 */
class CreateDeliveryOrdersAutomaticallyForAllOrderItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/delivery_orders/automatic";
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
