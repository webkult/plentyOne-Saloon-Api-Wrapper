<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property selections
 *
 * Lists the property selections of a property. The ID of the property must be specified.
 */
class ListPropertySelections extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections/{$this->lang}";
	}


	/**
	 * @param int $propertyId
	 * @param int $lang
	 */
	public function __construct(
		protected int $propertyId,
		protected int $lang,
	) {
	}
}
