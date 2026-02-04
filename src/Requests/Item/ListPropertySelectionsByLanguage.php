<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property selections by language
 *
 * Lists the property selections of a property for a specific language. The ID and language of the
 * property must be specified.
 */
class ListPropertySelectionsByLanguage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections/{$this->id}/{$this->lang}";
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 * @param int $lang
	 */
	public function __construct(
		protected int $propertyId,
		protected int $id,
		protected int $lang,
	) {
	}
}
