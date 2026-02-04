<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get name and language for an attribute value ID
 *
 * Gets name and language for an attribute value ID. The attribute value ID must be specified.
 */
class GetNameAndLanguageForAttributeValueId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attribute_values/{$this->valueId}/names";
	}


	/**
	 * @param int $valueId
	 */
	public function __construct(
		protected int $valueId,
	) {
	}
}
