<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Convert an advance order into a sales order
 *
 * Converts an advance order into a sales order. The order ID of the advance order must be specified.
 */
class ConvertAdvanceOrderIntoSalesOrder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/sales_orders/convert";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
