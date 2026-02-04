<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a group option
 *
 * Deletes a group option. The ID of the group option must be specified.
 */
class DeleteGroupOption extends Request
{
	protected Method $method = Method::DELETE;


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
