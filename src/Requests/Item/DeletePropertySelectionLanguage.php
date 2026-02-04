<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property selection language
 *
 * Deletes a property selection language. The ID of the selection and the language must be specified.
 */
class DeletePropertySelectionLanguage extends Request
{
	protected Method $method = Method::DELETE;


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
