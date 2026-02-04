<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property market reference
 *
 * Updates a property market reference.
 */
class UpdatePropertyMarketReference extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->id}/market_references/{$this->marketId}";
	}


	/**
	 * @param int $id
	 * @param int $marketId
	 */
	public function __construct(
		protected int $id,
		protected int $marketId,
	) {
	}
}
