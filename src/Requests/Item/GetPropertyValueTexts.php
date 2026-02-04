<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property value texts
 *
 * Gets the texts saved for a specific property of the type Text in all available languages. The ID of
 * the property must be specified.
 */
class GetPropertyValueTexts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/variations/{$this->variationId}/variation_properties/{$this->propertyId}/texts";
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function __construct(
		protected int $itemId,
		protected int $variationId,
		protected int $propertyId,
	) {
	}
}
