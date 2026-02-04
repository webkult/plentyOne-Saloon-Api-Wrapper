<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an order status
 *
 * Updates an order status. The ID of the order status must be specified.
 */
class UpdateOrderStatus extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/statuses/{$this->statusId}";
	}


	/**
	 * @param float|int $statusId The ID of the order status that should be updated.
	 */
	public function __construct(
		protected float|int $statusId,
	) {
	}
}
