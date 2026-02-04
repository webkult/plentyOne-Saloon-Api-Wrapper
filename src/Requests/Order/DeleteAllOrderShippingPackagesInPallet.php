<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete all order shipping packages in a pallet
 *
 * Deletes all order shipping packages in a pallet. The ID of the order and the ID of the pallet must
 * be specified.
 */
class DeleteAllOrderShippingPackagesInPallet extends Request
{
	protected Method $method = Method::DELETE;


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
