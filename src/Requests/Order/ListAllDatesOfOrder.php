<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all dates of an order
 *
 * Lists all dates of an order. The ID of the order must be specified.
 * <b>DEPRECATED: Use the following
 * route: GET /rest/orders/{orderId}</b>
 */
class ListAllDatesOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/dates";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
