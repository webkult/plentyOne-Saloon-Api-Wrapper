<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get group names by group ID
 *
 * Gets group names for the specified group ID.
 */
class GetGroupNamesByGroupId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/{$this->groupId}/names";
	}


	/**
	 * @param int $groupId
	 */
	public function __construct(
		protected int $groupId,
	) {
	}
}
