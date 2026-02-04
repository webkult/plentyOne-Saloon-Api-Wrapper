<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get category
 *
 * Get category for given ID.
 */
class GetCategory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/categories/{$this->id}";
	}


	/**
	 * @param int $id The ID of the category to be found.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
