<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an attribute name
 *
 * Gets the attribute name in the specified language. The language code must be specified.
 */
class GetAttributeName extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/names";
	}


	/**
	 * @param int $attributeId
	 */
	public function __construct(
		protected int $attributeId,
	) {
	}
}
