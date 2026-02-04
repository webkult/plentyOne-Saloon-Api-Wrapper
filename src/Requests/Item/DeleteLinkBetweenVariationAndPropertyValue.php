<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete link between variation and property value
 *
 * Delete a link between a variation and a property value. The ID of the item, the ID of the variation
 * and the ID of the property must be specified.
 */
class DeleteLinkBetweenVariationAndPropertyValue extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_properties/{$this->propertyId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $propertyId,
	) {
	}
}
