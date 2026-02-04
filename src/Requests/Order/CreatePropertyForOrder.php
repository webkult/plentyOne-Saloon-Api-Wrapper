<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create property for an order
 *
 * <b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b>
 * Creates a property and links
 * it to an order. The ID of the order must be specified.
 */
class CreatePropertyForOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/properties";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
