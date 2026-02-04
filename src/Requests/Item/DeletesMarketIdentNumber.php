<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a market ident number
 *
 * Deletes a market ident number (ASIN/ePID) of a variation.
 */
class DeletesMarketIdentNumber extends Request
{
	protected Method $method = Method::DELETE;


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
