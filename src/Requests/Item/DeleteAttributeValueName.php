<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an attribute value name
 *
 * Deletes an attribute value name. The attribute value ID and language must be specified.
 */
class DeleteAttributeValueName extends Request
{
	protected Method $method = Method::DELETE;


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
