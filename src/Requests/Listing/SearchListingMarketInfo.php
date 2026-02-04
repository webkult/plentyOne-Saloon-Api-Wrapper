<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search listing market info
 *
 * Search listing market info by filter options.
 */
class SearchListingMarketInfo extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/infos";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|int $id Filter that restricts the search result to listing market info that match the given ID(s).
	 * @param null|int $listingMarketId Filter that restricts the search result to listing market info that match the given listing market ID(s).
	 * @param null|string $type Filter that restricts the search result to listing market info with a custom type. Available values are 'warning', 'error', 'info'.
	 * @param null|int $code Filter that restricts the search result to listing market info with given codes.
	 * @param null|string $createdAtFrom Filter that restricts the search result to listing markets that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $createdAtTo Filter that restricts the search result to listing markets that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|array $with An array with child instances to be loaded.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $id = null,
		protected ?int $listingMarketId = null,
		protected ?string $type = null,
		protected ?int $code = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'id' => $this->id,
			'listingMarketId' => $this->listingMarketId,
			'type' => $this->type,
			'code' => $this->code,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'with' => $this->with,
		]);
	}
}
