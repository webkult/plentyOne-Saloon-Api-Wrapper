<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property.
 *
 * Gets a property. The ID of the property must be specified.
 */
class GetProperty extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/{$this->propertyId}";
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property.</li><li>'amazon' = The amazon values of the property.</li><li>'options' = The options of the property.</li><li>'groups' = The groups of the property.</li></ul>
	 */
	public function __construct(
		protected int $propertyId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
