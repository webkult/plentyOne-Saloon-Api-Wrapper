<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get a delivery order create preview.
 *
 * Returns a delivery order preview for the given order data without creating a delivery order.
 */
class GetDeliveryOrderCreatePreview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/delivery_orders/preview";
	}


	public function __construct()
	{
	}
}
