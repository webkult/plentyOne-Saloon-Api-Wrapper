<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete all pallets of an order
 *
 * Deletes all pallets of an order. The ID of the pallet must be specified.
 */
class DeleteAllPalletsOfOrder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/pallets/{$this->palletId}";
	}


	/**
	 * @param int $palletId The ID of the pallet
	 */
	public function __construct(
		protected int $palletId,
	) {
	}
}
