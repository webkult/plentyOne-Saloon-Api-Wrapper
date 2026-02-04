<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an attribute value name
 *
 * Gets the attribute value name. The attribute value ID and language must be specified.
 */
class GetAttributeValueName extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attribute_values/{$this->valueId}/names/{$this->lang}";
	}


	/**
	 * @param int $valueId The ID of the attribute value.
	 * @param string $lang The language of the attribute value.
	 */
	public function __construct(
		protected int $valueId,
		protected string $lang,
	) {
	}
}
