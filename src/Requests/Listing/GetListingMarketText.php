<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing market text
 *
 * Gets a listing market text by providing its ID.
 */
class GetListingMarketText extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/texts/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market text entry.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
