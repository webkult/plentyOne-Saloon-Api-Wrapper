<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create order property type
 *
 * Creates an order property type. After creating the order property type, it can be linked to an
 * existing order using the property type ID.
 */
class CreateOrderPropertyType extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/properties/types";
	}


	public function __construct()
	{
	}
}
