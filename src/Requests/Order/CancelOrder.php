<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Cancel an order
 *
 * Cancels an order. The ID of the order must be specified.
 */
class CancelOrder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/cancel";
	}


	/**
	 * @param int $orderId The ID of the order to be canceled.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
