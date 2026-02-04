<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a listing market
 *
 * Updates a listing market by ID.
 */
class UpdateListingMarket extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/{$this->id}";
	}


	/**
	 * @param int $id The listing market ID.
	 * @param float|int $referrerId The referrer ID.
	 */
	public function __construct(
		protected int $id,
		protected float|int $referrerId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['referrerId' => $this->referrerId]);
	}
}
