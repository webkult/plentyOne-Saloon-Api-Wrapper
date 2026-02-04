<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property option
 *
 * Updates a property option. The ID of the property option must be specified.
 */
class UpdatePropertyOption extends Request
{
	protected Method $method = Method::PUT;


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
