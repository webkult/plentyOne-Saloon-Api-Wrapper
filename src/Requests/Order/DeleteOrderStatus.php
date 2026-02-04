<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order status
 *
 * Deletes an order status. The ID of the order status must be specified.
 */
class DeleteOrderStatus extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/statuses/{$this->statusId}";
	}


	/**
	 * @param float|int $statusId The ID of the status, which shall be deleted.
	 */
	public function __construct(
		protected float|int $statusId,
	) {
	}
}
