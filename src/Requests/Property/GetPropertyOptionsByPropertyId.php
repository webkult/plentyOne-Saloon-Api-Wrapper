<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property options by property ID
 *
 * Gets property options for the specified property ID.
 */
class GetPropertyOptionsByPropertyId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/{$this->propertyId}/options";
	}


	/**
	 * @param int $propertyId
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property option.</li></ul>
	 * @param null|string $type Filter restricts the list of results to properties which have have a matching type. Possible search operators are: 'eq', 'in'
	 */
	public function __construct(
		protected int $propertyId,
		protected ?string $with = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'type' => $this->type]);
	}
}
