<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate a client (store)
 *
 * Deactivates a client (store) for a sales price. The ID of the sales price and the ID of the client
 * (store) must be specified.
 */
class DeactivateClientStore extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/online_stores/{$this->webstoreId}";
	}


	/**
	 * @param int $id
	 * @param int $webstoreId
	 */
	public function __construct(
		protected int $id,
		protected int $webstoreId,
	) {
	}
}
