<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update listing market directory
 *
 * Updates a listing market directory by ID.
 */
class UpdateListingMarketDirectory extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/directories/{$this->id}";
	}


	/**
	 * @param int $id The listing market directory ID.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
