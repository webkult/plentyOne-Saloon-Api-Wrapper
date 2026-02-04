<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Split a sales order into at least two sales orders
 *
 * Splits a sales order into at least two sales orders. The parent order ID and the quantities to use
 * must be specified.
 */
class SplitSalesOrderIntoAtLeastTwoSalesOrders extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/sales_orders/{$this->orderId}/split";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
