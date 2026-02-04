<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Save a shipping service provider
 *
 * Saves a shipping service provider. The name of the shipping service provider must be specified.
 */
class SaveShippingServiceProvider extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/shipping_service_providers";
	}


	public function __construct()
	{
	}
}
