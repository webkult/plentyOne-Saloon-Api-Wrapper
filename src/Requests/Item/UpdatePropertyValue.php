<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property value
 *
 * Update the data of a property value linked to a variation.
 */
class UpdatePropertyValue extends Request
{
	protected Method $method = Method::PUT;


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
