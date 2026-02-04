<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property market reference
 *
 * Gets a property market reference. The market ID and the property ID must be specified.
 */
class GetPropertyMarketReference extends Request
{
	protected Method $method = Method::GET;


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
