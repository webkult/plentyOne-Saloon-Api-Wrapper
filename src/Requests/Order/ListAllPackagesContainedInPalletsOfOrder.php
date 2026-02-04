<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all packages contained in pallets of an order
 *
 * Lists all packages contained in pallets of an order. The ID of the order and of the pallet must be
 * specified.
 */
class ListAllPackagesContainedInPalletsOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/pallets/{$this->palletId}/packages";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $palletId The ID of the pallet
	 */
	public function __construct(
		protected int $orderId,
		protected int $palletId,
	) {
	}
}
