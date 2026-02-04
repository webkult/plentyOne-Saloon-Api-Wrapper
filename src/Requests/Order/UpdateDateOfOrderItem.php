<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a date of an order item
 *
 * <b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b>
 * Updates a date of an order
 * item. The ID of the date must be specified.
 */
class UpdateDateOfOrderItem extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/dates/{$this->id}";
	}


	/**
	 * @param int $id The ID of the order item date
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
