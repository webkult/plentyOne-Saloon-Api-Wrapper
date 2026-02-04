<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List activated clients (stores)
 *
 * Lists all activated clients (stores) for a sales price. The ID of the sales price must be specified.
 */
class ListActivatedClientsStores extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/online_stores";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
