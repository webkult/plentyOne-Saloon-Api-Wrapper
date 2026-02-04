<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property relation selection
 *
 * Gets a property relation selection. The ID of the relation selection must be specified.
 */
class GetPropertyRelationSelection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/selections/{$this->relationSelectionId}";
	}


	/**
	 * @param int $relationSelectionId The ID of the relation selection
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li><li>'selection' = The selection of the property relation selection.</li></ul>
	 */
	public function __construct(
		protected int $relationSelectionId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
