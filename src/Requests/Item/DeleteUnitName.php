<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a unit name
 *
 * Deletes a unit name. The ID of the unit and the language must be specified.
 */
class DeleteUnitName extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/units/{$this->id}/names/{$this->lang}";
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function __construct(
		protected int $id,
		protected int $lang,
	) {
	}
}
