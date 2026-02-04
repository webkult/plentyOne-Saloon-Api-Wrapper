<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List attribute value image link
 *
 * Lists the images linked to an attribute value.
 */
class ListAttributeValueImageLink extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/attribute_value_markets";
	}


	/**
	 * @param int $id
	 * @param null|int $imageId The unique ID of the image
	 * @param null|int $itemId The unique ID of the item
	 * @param null|int $valueId The unique ID of the attribute value
	 * @param null|int $attributeId The unique ID of the attribute
	 */
	public function __construct(
		protected int $id,
		protected ?int $imageId = null,
		protected ?int $itemId = null,
		protected ?int $valueId = null,
		protected ?int $attributeId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'imageId' => $this->imageId,
			'itemId' => $this->itemId,
			'valueId' => $this->valueId,
			'attributeId' => $this->attributeId,
		]);
	}
}
