<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List unpacked items of a shipping package by the order ID
 *
 * Lists unpacked items of a shipping package by a specific order ID. The ID of the order is mandatory.
 */
class ListUnpackedItemsOfShippingPackageByTheOrderId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/packages/unpacked_items";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
