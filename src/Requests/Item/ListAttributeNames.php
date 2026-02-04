<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List attribute names
 *
 * Lists the attribute names of an attribute.
 */
class ListAttributeNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/names/{$this->lang}";
	}


	/**
	 * @param int $attributeId The ID of the attribute.
	 * @param string $lang The language of the attribute.
	 */
	public function __construct(
		protected int $attributeId,
		protected string $lang,
	) {
	}
}
