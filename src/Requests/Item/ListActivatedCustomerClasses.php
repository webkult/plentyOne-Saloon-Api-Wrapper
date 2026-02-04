<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List activated customer classes
 *
 * Lists the activated customer classes for a sales price. The ID of the sales price must be specified.
 */
class ListActivatedCustomerClasses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/customer_classes";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
