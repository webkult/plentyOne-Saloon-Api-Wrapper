<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List items contained in package pallets of an order
 *
 * Lists items contained in package pallets of an order. The ID of the order is mandatory.
 */
class ListItemsContainedInPackagePalletsOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/pallets/packages/items";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
