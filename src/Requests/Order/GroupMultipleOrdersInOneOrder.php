<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Group multiple orders in one order.
 *
 * Groups multiple orders in one order. The IDs of the orders to group must be specified.
 */
class GroupMultipleOrdersInOneOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/sales_orders/group";
	}


	public function __construct()
	{
	}
}
