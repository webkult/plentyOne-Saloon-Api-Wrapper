<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update property value text by language
 *
 * Updates the text saved for a specific property of the type Text in the specified language. The ID of
 * the property and the language must be specified.
 */
class UpdatePropertyValueTextByLanguage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/variations/{$this->variationId}/variation_properties/{$this->propertyId}/texts/{$this->lang}";
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 * @param int $lang
	 */
	public function __construct(
		protected int $itemId,
		protected int $variationId,
		protected int $propertyId,
		protected int $lang,
	) {
	}
}
