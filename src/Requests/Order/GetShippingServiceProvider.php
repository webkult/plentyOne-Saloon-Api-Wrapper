<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a shipping service provider
 *
 * Gets a shipping service provider. The ID of the shipping service provider must be specified.
 */
class GetShippingServiceProvider extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/shipping_service_providers/{$this->shippingServiceProviderId}";
	}


	/**
	 * @param int $shippingServiceProviderId
	 * @param int $shippingServiceProviderId The ID of the shipping service provider
	 */
	public function __construct(
		protected int $shippingServiceProviderId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['shippingServiceProviderId' => $this->shippingServiceProviderId]);
	}
}
