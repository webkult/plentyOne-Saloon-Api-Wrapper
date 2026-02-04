<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an attribute value
 *
 * Updates an attribute value. The attribute value must be specified.
 */
class UpdateAttributeValue extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/values/{$this->id}";
	}


	/**
	 * @param int $attributeId
	 * @param int $id
	 */
	public function __construct(
		protected int $attributeId,
		protected int $id,
	) {
	}
}
