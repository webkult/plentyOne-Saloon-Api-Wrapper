<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List package numbers of an order
 *
 * Lists the package numbers of an order. The ID of the order must be specified.
 */
class ListPackageNumbersOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/packagenumbers";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
