<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order
 *
 * Deletes an order. The ID of the order must be specified.
 */
class DeleteOrder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}";
	}


	/**
	 * @param int $orderId The ID of the order to be deleted.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
