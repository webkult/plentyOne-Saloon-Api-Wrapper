<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Mass attach propertyId and groupId collection into the pivot table.
 *
 * Mass attach property id and group id collection into the pivot table. GroupId must be specified.
 */
class MassAttachPropertyIdAndGroupIdCollectionIntoThePivotTable extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/groups/{$this->groupId}/properties";
	}


	/**
	 * @param int $groupId The ID of the group
	 */
	public function __construct(
		protected int $groupId,
	) {
	}
}
