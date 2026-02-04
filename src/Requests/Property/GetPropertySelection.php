<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property selection
 *
 * Gets a property selection. The ID of the selection must be specified.
 */
class GetPropertySelection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/selections/{$this->selectionId}";
	}


	/**
	 * @param int $selectionId The ID of the selection
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property selection.</li><li>'names' = The names of the property selection.</li></ul>
	 */
	public function __construct(
		protected int $selectionId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
