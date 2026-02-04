<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates an attribute map.
 *
 * Updates an attribute map. The ID of the attribute and the ID of the market must be specified.
 */
class UpdatesAttributeMap extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/markets/{$this->marketId}/maps";
	}


	/**
	 * @param int $attributeId
	 * @param int $marketId
	 */
	public function __construct(
		protected int $attributeId,
		protected int $marketId,
	) {
	}
}
