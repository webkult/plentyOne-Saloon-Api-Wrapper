<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update order item transaction
 *
 * Updates an order item transaction. Transactions are order item movements. These are incoming and
 * outgoing items.
 */
class UpdateOrderItemTransaction extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/transactions/{$this->transactionId}";
	}


	/**
	 * @param int $transactionId
	 */
	public function __construct(
		protected int $transactionId,
	) {
	}
}
