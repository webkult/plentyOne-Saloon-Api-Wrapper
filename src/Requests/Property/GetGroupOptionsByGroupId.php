<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get group options by group ID
 *
 * Gets group options for the specified group ID.
 */
class GetGroupOptionsByGroupId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/{$this->groupId}/options";
	}


	/**
	 * @param int $groupId
	 */
	public function __construct(
		protected int $groupId,
	) {
	}
}
