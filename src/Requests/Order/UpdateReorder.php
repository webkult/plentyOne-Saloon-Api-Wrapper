<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a reorder
 *
 * Updates a reorder. The order ID must be specified.
 */
class UpdateReorder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/reorders/{$this->orderId}";
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
