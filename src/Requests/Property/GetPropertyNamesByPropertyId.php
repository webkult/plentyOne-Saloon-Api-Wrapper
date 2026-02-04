<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property names by property ID
 *
 * Gets property names for the specified property ID.
 */
class GetPropertyNamesByPropertyId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/{$this->propertyId}/names";
	}


	/**
	 * @param int $propertyId
	 */
	public function __construct(
		protected int $propertyId,
	) {
	}
}
