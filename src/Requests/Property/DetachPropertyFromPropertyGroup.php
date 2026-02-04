<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Detach a property from a property group.
 *
 * Detaches a property from a property group. The ID of the property and the ID of the property group
 * must be specified.
 */
class DetachPropertyFromPropertyGroup extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/groups/{$this->groupId}/properties/{$this->propertyId}";
	}


	/**
	 * @param int $groupId The ID of the group
	 * @param int $propertyId The ID of the property
	 */
	public function __construct(
		protected int $groupId,
		protected int $propertyId,
	) {
	}
}
