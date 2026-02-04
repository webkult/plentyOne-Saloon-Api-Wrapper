<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete order item transaction
 *
 * Deletes an order item transaction. Transactions are order item movements. These are incoming and
 * outgoing items. The ID of the transaction must be specified.
 */
class DeleteOrderItemTransaction extends Request
{
	protected Method $method = Method::DELETE;


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
