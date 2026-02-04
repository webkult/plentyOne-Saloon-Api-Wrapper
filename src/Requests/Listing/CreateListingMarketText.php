<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a listing market text
 *
 * Creates a listing market text for a given listing market ID. If an entry with same data already
 * exists the request will be ignored and the old entry will be returned.
 */
class CreateListingMarketText extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/texts";
	}


	/**
	 * @param int $listingMarketId The listing market ID this text belongs to.
	 */
	public function __construct(
		protected int $listingMarketId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['listingMarketId' => $this->listingMarketId]);
	}
}
