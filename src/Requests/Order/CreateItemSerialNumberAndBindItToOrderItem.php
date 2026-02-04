<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create item serial number and bind it to order item
 *
 * Creates item serial number and bind it to order item. The ID of the order and the ID of the order
 * item must be specified.
 */
class CreateItemSerialNumberAndBindItToOrderItem extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/items/{$this->orderItemId}/serialNumbers";
	}


	/**
	 * @param int $orderId
	 * @param int $orderItemId
	 */
	public function __construct(
		protected int $orderId,
		protected int $orderItemId,
	) {
	}
}
