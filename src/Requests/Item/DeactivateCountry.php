<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate a country
 *
 * Deactivates a country for a sales price.
 */
class DeactivateCountry extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/countries/{$this->countryId}";
	}


	/**
	 * @param int $id
	 * @param int $countryId
	 */
	public function __construct(
		protected int $id,
		protected int $countryId,
	) {
	}
}
