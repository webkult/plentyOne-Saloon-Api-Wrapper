<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Reset a shipment
 *
 * Reset the shipments for the given order IDs. At least one ID of an order must be specified.
 */
class ResetShipment extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/shipping_center/reset_shipments";
	}


	/**
	 * @param array $orderIds The IDs of the orders that you want to reset the shipments for
	 */
	public function __construct(
		protected array $orderIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['orderIds' => $this->orderIds]);
	}
}
