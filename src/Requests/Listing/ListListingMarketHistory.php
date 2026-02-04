<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List listing market history
 *
 * Lists listing market history by filter options.
 */
class ListListingMarketHistory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/histories";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|int $listingMarketId Filter that restricts the search result to listing market histories that match the given listing market ID(s).
	 * @param null|int $variationId Filter that restricts the search result to listing market histories that match the given variation ID(s).
	 * @param null|string $variations Filter that restricts the search result to listing market histories with a custom variation condition. Available values are 'all', 'fixed'.
	 * @param null|float|int $referrerId Filter that restricts the search result to listing market histories with given referrer ID.
	 * @param null|int $credentialsId Filter that restricts the search result to listing market histories with given credential ID.
	 * @param null|int $directoryId Filter that restricts the search result to listing market histories with a given directory ID.
	 * @param null|string $verified Filter that restricts the search result to listing market histories that are verified. Available values are 'succeeded','unknown' or 'failed'.
	 * @param null|string $duration Filter that restricts the search result to listing market histories with given duration.
	 * @param null|string $externalId Filter that restricts the search result to listing market histories with given external id.
	 * @param null|int $listingId Filter that restricts the search result to listing market histories that belong to a given listing ID.
	 * @param null|int $itemId Filter that restricts the search result to listing market histories that belong to a given item ID.
	 * @param null|int $listingTypeId Filter that restricts the search result to listing market histories that belong to a listing of a custom type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Auction</li>
	 *     <li>2 - Fixed price</li>
	 *     <li>3 - Shop (only for Hood listings)</li>
	 *     </ul>
	 * @param null|int $stockDependenceTypeId Filter that restricts the search result to listing market histories that belong to a listing with a custom stock dependence type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Unlimited stock with automatic synchronisation</li>
	 *     <li>2 - Limited and reserved stock</li>
	 *     <li>3 - Limited and unreserved stock</li>
	 *     <li>4 - Unlimited stock without automatich synchronisation</li>
	 *     </ul>
	 * @param null|int $statusId Filter that restricts the search result to listing market histories with a custom status status ID. Available values are:
	 *     <ul>
	 *     <li>1 - Active listing market histories</li>
	 *     <li>2 - Ended listing market histories</li>
	 *     <li>3 - Relisted listing market histories</li>
	 *     <li>4 - Hidden listing market histories</li>
	 *     </ul>
	 * @param null|string $stockCondition Filter that restricts the search result to listing market histories with a custom stock condition. Available values are 'stockNetLessEqualZero', 'stockNetLessZero', 'stockNetGreaterZero', 'stockGrossLessEqualZero', 'stockGrossLessZero', 'stockGrossGreaterZero', 'stockNetTotalLessEqualZero', 'stockNetTotalLessZero', 'stockNetTotalGreaterZero'
	 * @param null|string $updatedAtFrom Filter that restricts the search result to listing market histories that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to listing market histories that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $textData Filter that restricts the search result to listing market histories that match given text in listing title or description.
	 * @param null|string $firstPlatformCategoryId Filter that restricts the search result to listing market histories with first platform category ID equal to the given ID.
	 * @param null|string $secondPlatformCategoryId Filter that restricts the search result to listing market histories with second platform category ID equal to the given ID.
	 * @param null|string $firstShopCategoryId Filter that restricts the search result to listing market histories with first shop category ID equal to the given ID.
	 * @param null|string $secondShopCategoryId Filter that restricts the search result to listing market histories with second shop category ID equal to the given ID.
	 * @param null|string $thirdShopCategoryId Filter that restricts the search result to listing market histories with third shop category ID equal to the given ID.
	 * @param null|string $shippingProfileId Filter that restricts the search result to listing market histories that belong to a given shipping profile.
	 * @param null|string $lastSale Filter that restricts the search result to listing market histories with last sale before given date.The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $isEbayPlus Filter that restricts the search result to listing market histories that belong to eBay Plus.
	 * @param null|string $isClickAndCollect Filter that restricts the search result to listing market histories that belong to eBay Click & Collect.
	 * @param null|array $with An array with child instances to be loaded. Valid instances are 'listingMarket', 'texts', 'properties', 'prices', 'dates'.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $listingMarketId = null,
		protected ?int $variationId = null,
		protected ?string $variations = null,
		protected float|int|null $referrerId = null,
		protected ?int $credentialsId = null,
		protected ?int $directoryId = null,
		protected ?string $verified = null,
		protected ?string $duration = null,
		protected ?string $externalId = null,
		protected ?int $listingId = null,
		protected ?int $itemId = null,
		protected ?int $listingTypeId = null,
		protected ?int $stockDependenceTypeId = null,
		protected ?int $statusId = null,
		protected ?string $stockCondition = null,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?string $textData = null,
		protected ?string $firstPlatformCategoryId = null,
		protected ?string $secondPlatformCategoryId = null,
		protected ?string $firstShopCategoryId = null,
		protected ?string $secondShopCategoryId = null,
		protected ?string $thirdShopCategoryId = null,
		protected ?string $shippingProfileId = null,
		protected ?string $lastSale = null,
		protected ?string $isEbayPlus = null,
		protected ?string $isClickAndCollect = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'listingMarketId' => $this->listingMarketId,
			'variationId' => $this->variationId,
			'variations' => $this->variations,
			'referrerId' => $this->referrerId,
			'credentialsId' => $this->credentialsId,
			'directoryId' => $this->directoryId,
			'verified' => $this->verified,
			'duration' => $this->duration,
			'externalId' => $this->externalId,
			'listingId' => $this->listingId,
			'itemId' => $this->itemId,
			'listingTypeId' => $this->listingTypeId,
			'stockDependenceTypeId' => $this->stockDependenceTypeId,
			'statusId' => $this->statusId,
			'stockCondition' => $this->stockCondition,
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'textData' => $this->textData,
			'firstPlatformCategoryId' => $this->firstPlatformCategoryId,
			'secondPlatformCategoryId' => $this->secondPlatformCategoryId,
			'firstShopCategoryId' => $this->firstShopCategoryId,
			'secondShopCategoryId' => $this->secondShopCategoryId,
			'thirdShopCategoryId' => $this->thirdShopCategoryId,
			'shippingProfileId' => $this->shippingProfileId,
			'lastSale' => $this->lastSale,
			'isEbayPlus' => $this->isEbayPlus,
			'isClickAndCollect' => $this->isClickAndCollect,
			'with' => $this->with,
		]);
	}
}
