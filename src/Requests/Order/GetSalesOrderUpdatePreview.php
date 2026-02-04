<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a sales order update preview.
 *
 * Returns a sales order preview for the given order data without updating a sales order. The order ID
 * must be specified.
 */
class GetSalesOrderUpdatePreview extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/sales_orders/{$this->orderId}/preview";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
