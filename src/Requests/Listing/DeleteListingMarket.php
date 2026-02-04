<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete listing market
 *
 * Deletes a listing market by ID.
 */
class DeleteListingMarket extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/{$this->id}";
	}


	/**
	 * @param int $id The listing market ID.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
