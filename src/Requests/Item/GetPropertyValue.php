<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property value
 *
 * Gets a property value linked to a variation.
 */
class GetPropertyValue extends Request
{
	protected Method $method = Method::GET;


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
