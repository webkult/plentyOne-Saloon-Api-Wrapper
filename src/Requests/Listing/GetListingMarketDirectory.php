<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing market directory
 *
 * Gets a listing market directory by ID.
 */
class GetListingMarketDirectory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/directories/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market directory entry.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
