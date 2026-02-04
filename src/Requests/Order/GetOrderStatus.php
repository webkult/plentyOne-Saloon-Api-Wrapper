<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order status
 *
 * Gets an order status. The status has to be specified by providing a status ID.
 */
class GetOrderStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/statuses/{$this->statusId}";
	}


	/**
	 * @param float|int $statusId The ID of the order status.
	 */
	public function __construct(
		protected float|int $statusId,
	) {
	}
}
