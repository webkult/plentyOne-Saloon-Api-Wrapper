<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Attach warehouse locations.
 *
 * Attach warehouse locations. The order ID must be specified.
 */
class AttachWarehouseLocations extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/items/warehouse_locations/attach";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
