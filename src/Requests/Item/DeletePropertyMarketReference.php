<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property market reference
 *
 * Deletes a property market reference. The ID of the property and the ID of the market must be
 * specified.
 */
class DeletePropertyMarketReference extends Request
{
	protected Method $method = Method::DELETE;


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
