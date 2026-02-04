<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property relation.
 *
 * Gets a property relation. The ID of the property relation must be specified.
 */
class GetPropertyRelation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/relations/{$this->relationId}";
	}


	/**
	 * @param int $relationId The ID of the property
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property relation.</li><li>'group' = The property group of the property relation.</li><li>'values' = The values of the property relation.</li><li>'selectionValues' = The selection values of the property relation.</li></ul>
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
