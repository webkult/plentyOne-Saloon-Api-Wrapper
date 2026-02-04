<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List order shipping pallets
 *
 * Lists order shipping pallets. The ID of the order must be specified.
 */
class ListOrderShippingPallets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/pallets";
	}


	/**
	 * @param string $orderId The ID of the order
	 */
	public function __construct(
		protected string $orderId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['orderId' => $this->orderId]);
	}
}
