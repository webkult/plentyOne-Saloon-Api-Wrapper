<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a listing
 *
 * Updates a listing by given ID.
 */
class UpdateListing extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
