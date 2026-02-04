<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List listing markets
 *
 * Lists listing market by filter options.
 */
class ListListingMarkets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|int $id Filter that restricts the search result to listing markets that match the given ID(s).
	 * @param null|int $variationId Filter that restricts the search result to listing markets that match the given variation ID(s).
	 * @param null|string $variations Filter that restricts the search result to listing markets with a custom variation condition. Available values are 'all', 'fixed'.
	 * @param null|float|int $referrerId Filter that restricts the search result to listing markets with given referrer ID.
	 * @param null|int $credentialsId Filter that restricts the search result to listing markets with given credential ID.
	 * @param null|int $directoryId Filter that restricts the search result to listing markets with a given directory ID.
	 * @param null|string $verified Filter that restricts the search result to listing markets that are verified. Available values are 'succeeded','unknown' or 'failed'.
	 * @param null|string $duration Filter that restricts the search result to listing markets with given duration.
	 * @param null|int $listingId Filter that restricts the search result to listing markets that belong to a given listing ID.
	 * @param null|int $itemId Filter that restricts the search result to listing markets that belong to a given item ID.
	 * @param null|int $listingTypeId Filter that restricts the search result to listing markets that belong to a listing of a custom type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Auction</li>
	 *     <li>2 - Fixed price</li>
	 *     <li>3 - Shop (only for Hood listings)</li>
	 *     </ul>
	 * @param null|int $stockDependenceTypeId Filter that restricts the search result to listing markets that belong to a listing with a custom stock dependence type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Unlimited stock with automatic synchronisation</li>
	 *     <li>2 - Limited and reserved stock</li>
	 *     <li>3 - Limited and unreserved stock</li>
	 *     <li>4 - Unlimited stock without automatich synchronisation</li>
	 *     </ul>
	 * @param null|string $status Filter that restricts the search result to listing markets with a custom status condition. Available values are 'enabled', 'disabled', 'online', 'offline'
	 * @param null|string $stockCondition Filter that restricts the search result to listing markets with a custom stock condition. Available values are 'stockNetLessEqualZero', 'stockNetLessZero', 'stockNetGreaterZero', 'stockGrossLessEqualZero', 'stockGrossLessZero', 'stockGrossGreaterZero', 'stockNetTotalLessEqualZero', 'stockNetTotalLessZero', 'stockNetTotalGreaterZero'
	 * @param null|int $shippingProfileId Filter that restricts the search result to listing markets that belong to a given shipping profile ID
	 * @param null|string $updatedAtFrom Filter that restricts the search result to listing markets that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to listing markets that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|array $with An array with child instances to be loaded. Valid instances are 'listing', 'texts', 'properties', 'prices', 'dates', 'infos'.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $id = null,
		protected ?int $variationId = null,
		protected ?string $variations = null,
		protected float|int|null $referrerId = null,
		protected ?int $credentialsId = null,
		protected ?int $directoryId = null,
		protected ?string $verified = null,
		protected ?string $duration = null,
		protected ?int $listingId = null,
		protected ?int $itemId = null,
		protected ?int $listingTypeId = null,
		protected ?int $stockDependenceTypeId = null,
		protected ?string $status = null,
		protected ?string $stockCondition = null,
		protected ?int $shippingProfileId = null,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'id' => $this->id,
			'variationId' => $this->variationId,
			'variations' => $this->variations,
			'referrerId' => $this->referrerId,
			'credentialsId' => $this->credentialsId,
			'directoryId' => $this->directoryId,
			'verified' => $this->verified,
			'duration' => $this->duration,
			'listingId' => $this->listingId,
			'itemId' => $this->itemId,
			'listingTypeId' => $this->listingTypeId,
			'stockDependenceTypeId' => $this->stockDependenceTypeId,
			'status' => $this->status,
			'stockCondition' => $this->stockCondition,
			'shippingProfileId' => $this->shippingProfileId,
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'with' => $this->with,
		]);
	}
}
