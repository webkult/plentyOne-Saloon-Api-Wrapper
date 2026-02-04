<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List returns service provider plugins
 *
 * Lists all returns service provider plugins.
 */
class ListReturnsServiceProviderPlugins extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/returns/returns_service_providers/plugins";
	}


	public function __construct()
	{
	}
}
