<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete shipping information
 *
 * Deletes the shipping information. The ID of the order must be specified.
 */
class DeleteShippingInformation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/shipping_information";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
