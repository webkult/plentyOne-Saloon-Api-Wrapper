<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an attribute value
 *
 * Deletes an attribute value. The attribute ID must be specified.
 */
class DeleteAttributeValue extends Request
{
	protected Method $method = Method::DELETE;


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
