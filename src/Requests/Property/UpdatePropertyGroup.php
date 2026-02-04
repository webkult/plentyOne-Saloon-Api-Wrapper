<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property group
 *
 * Updates a property group. The ID of the group must be specified.
 */
class UpdatePropertyGroup extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/{$this->groupId}";
	}


	/**
	 * @param int $groupId The ID of the group
	 */
	public function __construct(
		protected int $groupId,
	) {
	}
}
