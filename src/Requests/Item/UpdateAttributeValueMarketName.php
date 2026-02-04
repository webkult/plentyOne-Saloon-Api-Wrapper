<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an attribute value market name
 *
 * Updates an attribute value market name. The attribute value ID and language must be specified.
 */
class UpdateAttributeValueMarketName extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/value_market_names/{$this->valueId}/{$this->lang}/{$this->referenceType}";
	}


	/**
	 * @param int $attributeId
	 * @param int $valueId
	 * @param int $lang
	 * @param int $referenceType
	 */
	public function __construct(
		protected int $attributeId,
		protected int $valueId,
		protected int $lang,
		protected int $referenceType,
	) {
	}
}
