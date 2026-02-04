<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets an attribute value map.
 *
 * Gets an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of
 * the market must be specified.
 */
class GetsAttributeValueMap extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/values/{$this->attributeValueId}/markets/{$this->marketId}/maps";
	}


	/**
	 * @param int $attributeId
	 * @param int $attributeValueId
	 * @param int $marketId
	 */
	public function __construct(
		protected int $attributeId,
		protected int $attributeValueId,
		protected int $marketId,
	) {
	}
}
