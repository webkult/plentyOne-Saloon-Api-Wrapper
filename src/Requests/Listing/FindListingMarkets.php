<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Find listing markets
 *
 * Lists listing market by filter options.
 */
class FindListingMarkets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/find";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|int $id Filter that restricts the search result to listing markets that match the given ID(s).
	 * @param null|string $variations Filter that restricts the search result to listing markets with a custom variation condition. Available values are 'all', 'fixed'.
	 * @param null|float|int $referrerId Filter that restricts the search result to listing markets with given referrer ID.
	 * @param null|int $credentialsId Filter that restricts the search result to listing markets with given credential ID.
	 * @param null|int $directoryId Filter that restricts the search result to listing markets with a given directory ID.
	 * @param null|int $itemId Filter that restricts the search result to listing markets that belong to a given item ID.
	 * @param null|int $shippingProfileId Filter that restricts the search result to listing markets that belong to a given shipping profile ID
	 * @param null|array $with An array with child instances to be loaded. Valid instances are 'listing', 'texts', 'properties', 'prices', 'dates', 'infos'.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $id = null,
		protected ?string $variations = null,
		protected float|int|null $referrerId = null,
		protected ?int $credentialsId = null,
		protected ?int $directoryId = null,
		protected ?int $itemId = null,
		protected ?int $shippingProfileId = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'id' => $this->id,
			'variations' => $this->variations,
			'referrerId' => $this->referrerId,
			'credentialsId' => $this->credentialsId,
			'directoryId' => $this->directoryId,
			'itemId' => $this->itemId,
			'shippingProfileId' => $this->shippingProfileId,
			'with' => $this->with,
		]);
	}
}
