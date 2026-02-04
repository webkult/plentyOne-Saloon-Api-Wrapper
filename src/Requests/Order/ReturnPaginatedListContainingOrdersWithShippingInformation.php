<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return paginated list containing orders with shipping information
 *
 * Return a paginated list containing all the orders with their shipping information
 */
class ReturnPaginatedListContainingOrdersWithShippingInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/list_shipping_information";
	}


	public function __construct()
	{
	}
}
