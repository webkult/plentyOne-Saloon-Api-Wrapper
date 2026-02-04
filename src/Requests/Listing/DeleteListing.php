<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a listing
 *
 * Deletes a listing by given ID.
 */
class DeleteListing extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/{$this->id}";
	}


	/**
	 * @param int $id The listing ID.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
