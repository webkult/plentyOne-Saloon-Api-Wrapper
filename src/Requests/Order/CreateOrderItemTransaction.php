<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create order item transaction
 *
 * Creates an order item transaction. Transactions are order item movements. These are incoming and
 * outgoing items. The ID of the order item must be specified.
 */
class CreateOrderItemTransaction extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/transactions";
	}


	/**
	 * @param int $orderItemId
	 */
	public function __construct(
		protected int $orderItemId,
	) {
	}
}
