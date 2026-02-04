<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get a sales order create incomplete preview.
 *
 * Returns a sales order preview for the given incomplete order data without creating a sales order.
 */
class GetSalesOrderCreateIncompletePreview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/sales_orders/incomplete/preview";
	}


	public function __construct()
	{
	}
}
