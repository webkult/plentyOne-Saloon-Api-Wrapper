<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update all pallets of an order
 *
 * Updates all pallets of an order. The ID of the pallet must be specified.
 */
class UpdateAllPalletsOfOrder extends Request
{
	protected Method $method = Method::PUT;


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
