<?php

namespace PlentyOne\Api\Requests\OrderSummary;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get order summary by address ID
 *
 * Gets an order summary. The ID of the address must be specified.
 */
class GetOrderSummaryByAddressId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/order_summaries/orders/{$this->addressId}";
	}


	/**
	 * @param int $addressId
	 */
	public function __construct(
		protected int $addressId,
	) {
	}
}
