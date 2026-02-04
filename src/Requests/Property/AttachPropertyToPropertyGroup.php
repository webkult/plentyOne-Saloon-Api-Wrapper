<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Attach a property to a property group
 *
 * Attaches a property to a property group. The ID of the property and the ID of the property group
 * must be specified.
 */
class AttachPropertyToPropertyGroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
