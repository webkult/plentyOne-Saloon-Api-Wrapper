<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List orders with shipping information
 *
 * Lists all the orders with their shipping information.
 */
class ListOrdersWithShippingInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/shipping_information";
	}


	public function __construct()
	{
	}
}
