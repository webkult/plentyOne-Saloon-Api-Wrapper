<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Register a shipment
 *
 * Register a shipment for an order. The ID of the order must be specified.
 */
class RegisterShipment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/register_shipment";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param null|string $shippingProviderCode The code of the shipping service provider
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $shippingProviderCode = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['shippingProviderCode' => $this->shippingProviderCode]);
	}
}
