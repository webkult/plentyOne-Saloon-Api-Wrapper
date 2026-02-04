<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the delivery date
 *
 * Get the delivery date for a reorder
 */
class GetTheDeliveryDate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/reorders/{$this->orderId}/delivery_date";
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
