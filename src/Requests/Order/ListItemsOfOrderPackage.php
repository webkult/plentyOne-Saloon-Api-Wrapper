<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List items of an order package
 *
 * Lists items of an order package. The ID of the package must be specified.
 */
class ListItemsOfOrderPackage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/packages/{$this->packageId}/items";
	}


	/**
	 * @param int $packageId The ID of the order package
	 */
	public function __construct(
		protected int $packageId,
	) {
	}
}
