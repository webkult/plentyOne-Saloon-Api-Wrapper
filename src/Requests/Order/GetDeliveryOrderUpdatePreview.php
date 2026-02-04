<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a delivery order update preview
 *
 * Returns a delivery order preview for the given order data without updating a delivery order. The
 * order ID must be specified.
 */
class GetDeliveryOrderUpdatePreview extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/delivery_orders/{$this->orderId}/preview";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
