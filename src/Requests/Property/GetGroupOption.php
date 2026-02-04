<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a group option
 *
 * Gets a group option. The ID of the group must be specified.
 */
class GetGroupOption extends Request
{
	protected Method $method = Method::GET;


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
