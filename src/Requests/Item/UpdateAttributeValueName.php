<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an attribute value name
 *
 * Updates an attribute value name.
 */
class UpdateAttributeValueName extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attribute_values/{$this->valueId}/names/{$this->lang}";
	}


	/**
	 * @param int $valueId
	 * @param int $lang
	 */
	public function __construct(
		protected int $valueId,
		protected int $lang,
	) {
	}
}
