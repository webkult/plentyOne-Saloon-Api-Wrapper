<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a redistribution
 *
 * Updates a redistribution. The ID of the order must be specified.
 */
class UpdateRedistribution extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/redistributions/{$this->orderId}";
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
