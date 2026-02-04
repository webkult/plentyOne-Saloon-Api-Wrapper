<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an attribute value image link
 *
 * Updates the link between an image and an attribute value. The following IDs must be specified: image
 * ID, item ID and value ID.
 */
class UpdateAttributeValueImageLink extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/attribute_value_markets/{$this->valueId}";
	}


	/**
	 * @param int $imageId The unique ID of the image
	 * @param int $valueId The unique ID of the attribute value
	 * @param int $id
	 * @param int $itemId The unique ID of the item
	 * @param int $attributeId The unique ID of the attribute
	 */
	public function __construct(
		protected int $imageId,
		protected int $valueId,
		protected int $id,
		protected int $itemId,
		protected int $attributeId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemId' => $this->itemId, 'attributeId' => $this->attributeId]);
	}
}
