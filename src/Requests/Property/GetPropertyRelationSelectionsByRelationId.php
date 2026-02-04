<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property relation selections by relation ID
 *
 * Gets property relation selections for the specified relation ID.
 */
class GetPropertyRelationSelectionsByRelationId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/{$this->relationId}/selections";
	}


	/**
	 * @param int $relationId
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li><li>'selection' = The selection of the property relation selection.</li></ul>
	 */
	public function __construct(
		protected int $relationId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
