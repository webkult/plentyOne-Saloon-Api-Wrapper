<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an order shipping package
 *
 * Updates an order shipping package. The ID of the order and the ID of the order shipping package must
 * be specified.
 */
class UpdateOrderShippingPackage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/packages/{$this->orderShippingPackageId}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 */
	public function __construct(
		protected int $orderId,
		protected int $orderShippingPackageId,
	) {
	}
}
