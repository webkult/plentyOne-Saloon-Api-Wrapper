<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property amazons by property ID
 *
 * Gets property amazons for the specified property ID.
 */
class GetPropertyAmazonsByPropertyId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/{$this->propertyId}/amazon";
	}


	/**
	 * @param int $propertyId
	 */
	public function __construct(
		protected int $propertyId,
	) {
	}
}
