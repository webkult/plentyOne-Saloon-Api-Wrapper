<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property group
 *
 * Deletes a property group. The ID of the group must be specified.
 */
class DeletePropertyGroup extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/{$this->groupId}";
	}


	/**
	 * @param int $groupId The ID of the property
	 */
	public function __construct(
		protected int $groupId,
	) {
	}
}
