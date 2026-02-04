<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an attribute value image link
 *
 * Gets an attribute value image link. The following IDs must be specified: image ID, item ID and value
 * ID.
 */
class GetAttributeValueImageLink extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/attribute_value_markets/{$this->valueId}";
	}


	/**
	 * @param int $imageId The unique ID of the image
	 * @param int $valueId The unique ID of the value
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
