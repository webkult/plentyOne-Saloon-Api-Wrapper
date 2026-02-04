<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an order shipping package by the packageId
 *
 * Updates an order shipping package. The ID of the order shipping package must be specified.
 */
class UpdateOrderShippingPackageByThePackageId extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/packages/{$this->orderShippingPackageId}";
	}


	/**
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 */
	public function __construct(
		protected int $orderShippingPackageId,
	) {
	}
}
