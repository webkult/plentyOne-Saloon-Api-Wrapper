<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an availability
 *
 * Deletes an availability. The ID ot the availability must be specified.
 */
class DeleteAvailability extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/availabilities/{$this->availabilityId}";
	}


	/**
	 * @param int $availabilityId The ID of the availability
	 */
	public function __construct(
		protected int $availabilityId,
	) {
	}
}
