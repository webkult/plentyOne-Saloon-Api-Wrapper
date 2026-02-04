<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes an attribute value map.
 *
 * Deletes an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of
 * the market must be specified.
 */
class DeletesAttributeValueMap extends Request
{
	protected Method $method = Method::DELETE;


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
