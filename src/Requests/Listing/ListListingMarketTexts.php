<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List listing market texts
 *
 * Lists listing market texts by filter options.
 */
class ListListingMarketTexts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/texts";
	}


	/**
	 * @param null|int $id Filter that restricts the search result to listing market texts with specific ID. Several IDs can be entered as array.
	 * @param null|int $listingMarketId Filter that restricts the search result to listing market texts with specific listing market IDs. Several IDs can be entered as array.
	 * @param null|string $language Filter that restricts the search result to listing market texts for a specific language. @see listing market text model language for the complete available list of language types.
	 * @param null|string $contains Filter that restricts the search result to listing market texts which title, subtitle or description contain the given value.
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?int $listingMarketId = null,
		protected ?string $language = null,
		protected ?string $contains = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'listingMarketId' => $this->listingMarketId,
			'language' => $this->language,
			'contains' => $this->contains,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
