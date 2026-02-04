<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the list of active shipping service providers for registration
 *
 * Get all the active shipping service providers for registration
 */
class GetTheListOfActiveShippingServiceProvidersForRegistration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/active_shipping_service_providers";
	}


	/**
	 * @param null|bool $includePlugins The flag that indicates if the plugin providers should be also returned in the list
	 */
	public function __construct(
		protected ?bool $includePlugins = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['includePlugins' => $this->includePlugins]);
	}
}
