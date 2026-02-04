<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create property value text by language
 *
 * Saves text for a specific property of the type Text in the specified language. The ID of the
 * property and the language must be specified.
 */
class CreatePropertyValueTextByLanguage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
