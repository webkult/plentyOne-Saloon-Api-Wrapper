<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order shipping package
 *
 * Deletes an order shipping package. The ID of the order and the ID of the order shipping package must
 * be specified.
 */
class DeleteOrderShippingPackage extends Request
{
	protected Method $method = Method::DELETE;


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
