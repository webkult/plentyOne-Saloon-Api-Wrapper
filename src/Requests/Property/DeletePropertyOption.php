<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property option
 *
 * Deletes a property option. The ID of the property option must be specified.
 */
class DeletePropertyOption extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/options/{$this->optionId}";
	}


	/**
	 * @param int $optionId The ID of the property option
	 */
	public function __construct(
		protected int $optionId,
	) {
	}
}
