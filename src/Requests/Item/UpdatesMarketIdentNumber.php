<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates a market ident number
 *
 * Updates a market ident number (ASIN/ePID) of a variation.
 */
class UpdatesMarketIdentNumber extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/market_ident_numbers/{$this->marketIdentNumberId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $marketIdentNumberId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $marketIdentNumberId,
	) {
	}
}
