<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all existing variation combinations for current item
 *
 * List of all existing unit and attribute combinations for current item. Returns an array.
 * *
 */
class GetAllExistingVariationCombinationsForCurrentItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/items/{$this->id}/combinations";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
