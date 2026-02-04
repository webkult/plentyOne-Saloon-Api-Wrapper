<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a group option
 *
 * Updates a group option. The ID of the group option must be specified.
 */
class UpdateGroupOption extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/options/{$this->optionId}";
	}


	/**
	 * @param int $optionId The ID of the group option
	 */
	public function __construct(
		protected int $optionId,
	) {
	}
}
