<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets an attribute map.
 *
 * Gets an attribute map. The ID of the attribute and the ID of the market must be specified.
 */
class GetsAttributeMap extends Request
{
	protected Method $method = Method::GET;


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
