<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a listing market text
 *
 * Updates a listing market text for a given listing market ID and language.
 */
class UpdateListingMarketText extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/texts/{$this->listingMarketId}/{$this->lang}";
	}


	/**
	 * @param int $listingMarketId The listing market ID this text belongs to.
	 * @param string $lang The listing market text language that should be updated.
	 */
	public function __construct(
		protected int $listingMarketId,
		protected string $lang,
	) {
	}
}
