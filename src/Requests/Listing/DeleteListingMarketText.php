<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a listing market text
 *
 * Deletes a listing market text for a given listing market text ID.
 */
class DeleteListingMarketText extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/texts/{$this->id}";
	}


	/**
	 * @param int $id
	 * @param string $lang The listing market text language that should be updated.
	 * @param int $listingMarketId The listing market ID this text belongs to.
	 */
	public function __construct(
		protected int $id,
		protected string $lang,
		protected int $listingMarketId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['lang' => $this->lang, 'listingMarketId' => $this->listingMarketId]);
	}
}
