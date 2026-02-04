<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an attribute value image link
 *
 * Deletes the link between an image and an attribute value. The attribute ID must be specified.
 */
class DeleteAttributeValueImageLink extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/attribute_value_markets/{$this->valueId}";
	}


	/**
	 * @param int $imageId The unique ID of the image
	 * @param int $valueId The unique ID of the attribute value
	 * @param int $id
	 * @param int $itemId The unique ID of the item
	 */
	public function __construct(
		protected int $imageId,
		protected int $valueId,
		protected int $id,
		protected int $itemId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemId' => $this->itemId]);
	}
}
