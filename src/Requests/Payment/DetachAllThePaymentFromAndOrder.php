<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Detach all the payment from and order.
 *
 * Detach all payments, updates order paid amount,adds an entry in the order history and update order
 * stock based on order settings.
 */
class DetachAllThePaymentFromAndOrder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/order/{$this->orderId}";
	}


	/**
	 * @param int $orderId An order ID.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
