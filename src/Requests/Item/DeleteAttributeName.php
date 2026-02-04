<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an attribute name
 *
 * Deletes the attribute name in the specified language. The language code and attribute name must be
 * specified.
 */
class DeleteAttributeName extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/names/{$this->lang}";
	}


	/**
	 * @param int $attributeId
	 * @param int $lang
	 */
	public function __construct(
		protected int $attributeId,
		protected int $lang,
	) {
	}
}
