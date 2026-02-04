<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property selection
 *
 * Gets a property selection of a property.
 */
class GetPropertySelection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections/{$this->id}";
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 */
	public function __construct(
		protected int $propertyId,
		protected int $id,
	) {
	}
}
