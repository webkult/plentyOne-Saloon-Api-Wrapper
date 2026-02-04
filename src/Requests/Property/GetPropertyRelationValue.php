<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property relation value
 *
 * Gets a property relation value. The ID of the relation value must be specified.
 */
class GetPropertyRelationValue extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/values/{$this->relationValueId}";
	}


	/**
	 * @param int $relationValueId The ID of the relation value
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li></ul>
	 */
	public function __construct(
		protected int $relationValueId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
