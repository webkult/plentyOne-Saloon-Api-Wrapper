<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property
 *
 * Deletes a property. The ID of the property must be specified.
 */
class DeleteProperty extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/{$this->propertyId}";
	}


	/**
	 * @param int $propertyId The ID of the property
	 */
	public function __construct(
		protected int $propertyId,
	) {
	}
}
