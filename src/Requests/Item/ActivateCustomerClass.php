<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Activate a customer class
 *
 * Activates a customer class for a sales price. The ID of the sales price and the ID of the customer
 * class must be specified.
 */
class ActivateCustomerClass extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/customer_classes/{$this->customerClassId}";
	}


	/**
	 * @param int $id
	 * @param int $customerClassId
	 */
	public function __construct(
		protected int $id,
		protected int $customerClassId,
	) {
	}
}
