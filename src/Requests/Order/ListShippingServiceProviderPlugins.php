<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List shipping service provider plugins
 *
 * Lists all shipping service provider plugins.
 */
class ListShippingServiceProviderPlugins extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/shipping_service_providers/plugins";
	}


	public function __construct()
	{
	}
}
