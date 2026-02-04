<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Listing\CreateListingMarketDirectory;
use PlentyOne\Api\Requests\Listing\CreateListingMarketText;
use PlentyOne\Api\Requests\Listing\CreateNewLayoutTemplate;
use PlentyOne\Api\Requests\Listing\CreateNewListing;
use PlentyOne\Api\Requests\Listing\CreateNewListingMarket;
use PlentyOne\Api\Requests\Listing\CreateOptionTemplate;
use PlentyOne\Api\Requests\Listing\DeleteLayoutTemplate;
use PlentyOne\Api\Requests\Listing\DeleteListing;
use PlentyOne\Api\Requests\Listing\DeleteListingMarket;
use PlentyOne\Api\Requests\Listing\DeleteListingMarketDirectory;
use PlentyOne\Api\Requests\Listing\DeleteListingMarketText;
use PlentyOne\Api\Requests\Listing\DeleteOptionTemplate;
use PlentyOne\Api\Requests\Listing\DeletesListingMarketItemSpecific;
use PlentyOne\Api\Requests\Listing\EndTheListing;
use PlentyOne\Api\Requests\Listing\FindListingMarkets;
use PlentyOne\Api\Requests\Listing\GetAllListingMarketDirectories;
use PlentyOne\Api\Requests\Listing\GetLayoutTemplate;
use PlentyOne\Api\Requests\Listing\GetListing;
use PlentyOne\Api\Requests\Listing\GetListingMarket;
use PlentyOne\Api\Requests\Listing\GetListingMarketDirectory;
use PlentyOne\Api\Requests\Listing\GetListingMarketHistory;
use PlentyOne\Api\Requests\Listing\GetListingMarketText;
use PlentyOne\Api\Requests\Listing\GetListingStockDependenceType;
use PlentyOne\Api\Requests\Listing\GetListingType;
use PlentyOne\Api\Requests\Listing\GetOptionTemplate;
use PlentyOne\Api\Requests\Listing\GetPreviewListOfOptionTemplates;
use PlentyOne\Api\Requests\Listing\GetShippingProfile;
use PlentyOne\Api\Requests\Listing\GetsAllListingMarketItemSpecifics;
use PlentyOne\Api\Requests\Listing\GetsListingMarketItemSpecific;
use PlentyOne\Api\Requests\Listing\ListListing;
use PlentyOne\Api\Requests\Listing\ListListingMarketHistory;
use PlentyOne\Api\Requests\Listing\ListListingMarketTexts;
use PlentyOne\Api\Requests\Listing\ListListingMarkets;
use PlentyOne\Api\Requests\Listing\ListListingShippingProfiles;
use PlentyOne\Api\Requests\Listing\ListListingStockDependenceTypes;
use PlentyOne\Api\Requests\Listing\ListListingTypes;
use PlentyOne\Api\Requests\Listing\RelistTheListing;
use PlentyOne\Api\Requests\Listing\SearchListingMarketInfo;
use PlentyOne\Api\Requests\Listing\StartTheMarketListingOnTheDesignatedMarket;
use PlentyOne\Api\Requests\Listing\UpdateListing;
use PlentyOne\Api\Requests\Listing\UpdateListingMarket;
use PlentyOne\Api\Requests\Listing\UpdateListingMarketDirectory;
use PlentyOne\Api\Requests\Listing\UpdateListingMarketHistories;
use PlentyOne\Api\Requests\Listing\UpdateListingMarketText;
use PlentyOne\Api\Requests\Listing\UpdateOptionTemplate;
use PlentyOne\Api\Requests\Listing\UpdatesListingMarketItemSpecific;
use PlentyOne\Api\Requests\Listing\VerifyListingMarkets;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Listing extends BaseResource
{
	/**
	 * @param int $id Filter that restricts the search result to listings with specific listing ID. Several IDs can be entered as array.
	 * @param int $itemId Filter that restricts the search result to listings with specific item ID. Several IDs can be entered as array.
	 * @param int $typeId Filter that restricts the search result to listings with specific type ID. Several IDs can be entered as array.
	 * @param int $stockDependenceTypeId Filter that restricts the search result to listings with specific stock dependence type ID. Several IDs can be entered as array.
	 * @param int $unitCombinationId Filter that restricts the search result to listings with specific unit combination ID. Several IDs can be entered as array.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param array $with An array with child instances to be loaded. One of 'stockDependenceType', 'type', 'markets', 'properties'.
	 */
	public function listListing(
		?int $id = null,
		?int $itemId = null,
		?int $typeId = null,
		?int $stockDependenceTypeId = null,
		?int $unitCombinationId = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListListing($id, $itemId, $typeId, $stockDependenceTypeId, $unitCombinationId, $page, $itemsPerPage, $with));
	}


	public function createNewListing(): Response
	{
		return $this->connector->send(new CreateNewListing());
	}


	public function createNewLayoutTemplate(): Response
	{
		return $this->connector->send(new CreateNewLayoutTemplate());
	}


	/**
	 * @param int $id The ID of the layout template entry.
	 */
	public function getLayoutTemplate(int $id): Response
	{
		return $this->connector->send(new GetLayoutTemplate($id));
	}


	/**
	 * @param int $id The layout template ID.
	 */
	public function deleteLayoutTemplate(int $id): Response
	{
		return $this->connector->send(new DeleteLayoutTemplate($id));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param int $id Filter that restricts the search result to listing markets that match the given ID(s).
	 * @param int $variationId Filter that restricts the search result to listing markets that match the given variation ID(s).
	 * @param string $variations Filter that restricts the search result to listing markets with a custom variation condition. Available values are 'all', 'fixed'.
	 * @param float|int $referrerId Filter that restricts the search result to listing markets with given referrer ID.
	 * @param int $credentialsId Filter that restricts the search result to listing markets with given credential ID.
	 * @param int $directoryId Filter that restricts the search result to listing markets with a given directory ID.
	 * @param string $verified Filter that restricts the search result to listing markets that are verified. Available values are 'succeeded','unknown' or 'failed'.
	 * @param string $duration Filter that restricts the search result to listing markets with given duration.
	 * @param int $listingId Filter that restricts the search result to listing markets that belong to a given listing ID.
	 * @param int $itemId Filter that restricts the search result to listing markets that belong to a given item ID.
	 * @param int $listingTypeId Filter that restricts the search result to listing markets that belong to a listing of a custom type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Auction</li>
	 *     <li>2 - Fixed price</li>
	 *     <li>3 - Shop (only for Hood listings)</li>
	 *     </ul>
	 * @param int $stockDependenceTypeId Filter that restricts the search result to listing markets that belong to a listing with a custom stock dependence type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Unlimited stock with automatic synchronisation</li>
	 *     <li>2 - Limited and reserved stock</li>
	 *     <li>3 - Limited and unreserved stock</li>
	 *     <li>4 - Unlimited stock without automatich synchronisation</li>
	 *     </ul>
	 * @param string $status Filter that restricts the search result to listing markets with a custom status condition. Available values are 'enabled', 'disabled', 'online', 'offline'
	 * @param string $stockCondition Filter that restricts the search result to listing markets with a custom stock condition. Available values are 'stockNetLessEqualZero', 'stockNetLessZero', 'stockNetGreaterZero', 'stockGrossLessEqualZero', 'stockGrossLessZero', 'stockGrossGreaterZero', 'stockNetTotalLessEqualZero', 'stockNetTotalLessZero', 'stockNetTotalGreaterZero'
	 * @param int $shippingProfileId Filter that restricts the search result to listing markets that belong to a given shipping profile ID
	 * @param string $updatedAtFrom Filter that restricts the search result to listing markets that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to listing markets that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param array $with An array with child instances to be loaded. Valid instances are 'listing', 'texts', 'properties', 'prices', 'dates', 'infos'.
	 */
	public function listListingMarkets(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?int $variationId = null,
		?string $variations = null,
		float|int|null $referrerId = null,
		?int $credentialsId = null,
		?int $directoryId = null,
		?string $verified = null,
		?string $duration = null,
		?int $listingId = null,
		?int $itemId = null,
		?int $listingTypeId = null,
		?int $stockDependenceTypeId = null,
		?string $status = null,
		?string $stockCondition = null,
		?int $shippingProfileId = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListListingMarkets($page, $itemsPerPage, $id, $variationId, $variations, $referrerId, $credentialsId, $directoryId, $verified, $duration, $listingId, $itemId, $listingTypeId, $stockDependenceTypeId, $status, $stockCondition, $shippingProfileId, $updatedAtFrom, $updatedAtTo, $with));
	}


	public function createNewListingMarket(): Response
	{
		return $this->connector->send(new CreateNewListingMarket());
	}


	public function getAllListingMarketDirectories(): Response
	{
		return $this->connector->send(new GetAllListingMarketDirectories());
	}


	public function createListingMarketDirectory(): Response
	{
		return $this->connector->send(new CreateListingMarketDirectory());
	}


	/**
	 * @param int $id The ID of the listing market directory entry.
	 */
	public function getListingMarketDirectory(int $id): Response
	{
		return $this->connector->send(new GetListingMarketDirectory($id));
	}


	/**
	 * @param int $id The listing market directory ID.
	 */
	public function updateListingMarketDirectory(int $id): Response
	{
		return $this->connector->send(new UpdateListingMarketDirectory($id));
	}


	/**
	 * @param int $id The listing market directory ID.
	 */
	public function deleteListingMarketDirectory(int $id): Response
	{
		return $this->connector->send(new DeleteListingMarketDirectory($id));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param int $id Filter that restricts the search result to listing markets that match the given ID(s).
	 * @param string $variations Filter that restricts the search result to listing markets with a custom variation condition. Available values are 'all', 'fixed'.
	 * @param float|int $referrerId Filter that restricts the search result to listing markets with given referrer ID.
	 * @param int $credentialsId Filter that restricts the search result to listing markets with given credential ID.
	 * @param int $directoryId Filter that restricts the search result to listing markets with a given directory ID.
	 * @param int $itemId Filter that restricts the search result to listing markets that belong to a given item ID.
	 * @param int $shippingProfileId Filter that restricts the search result to listing markets that belong to a given shipping profile ID
	 * @param array $with An array with child instances to be loaded. Valid instances are 'listing', 'texts', 'properties', 'prices', 'dates', 'infos'.
	 */
	public function findListingMarkets(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?string $variations = null,
		float|int|null $referrerId = null,
		?int $credentialsId = null,
		?int $directoryId = null,
		?int $itemId = null,
		?int $shippingProfileId = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new FindListingMarkets($page, $itemsPerPage, $id, $variations, $referrerId, $credentialsId, $directoryId, $itemId, $shippingProfileId, $with));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param int $listingMarketId Filter that restricts the search result to listing market histories that match the given listing market ID(s).
	 * @param int $variationId Filter that restricts the search result to listing market histories that match the given variation ID(s).
	 * @param string $variations Filter that restricts the search result to listing market histories with a custom variation condition. Available values are 'all', 'fixed'.
	 * @param float|int $referrerId Filter that restricts the search result to listing market histories with given referrer ID.
	 * @param int $credentialsId Filter that restricts the search result to listing market histories with given credential ID.
	 * @param int $directoryId Filter that restricts the search result to listing market histories with a given directory ID.
	 * @param string $verified Filter that restricts the search result to listing market histories that are verified. Available values are 'succeeded','unknown' or 'failed'.
	 * @param string $duration Filter that restricts the search result to listing market histories with given duration.
	 * @param string $externalId Filter that restricts the search result to listing market histories with given external id.
	 * @param int $listingId Filter that restricts the search result to listing market histories that belong to a given listing ID.
	 * @param int $itemId Filter that restricts the search result to listing market histories that belong to a given item ID.
	 * @param int $listingTypeId Filter that restricts the search result to listing market histories that belong to a listing of a custom type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Auction</li>
	 *     <li>2 - Fixed price</li>
	 *     <li>3 - Shop (only for Hood listings)</li>
	 *     </ul>
	 * @param int $stockDependenceTypeId Filter that restricts the search result to listing market histories that belong to a listing with a custom stock dependence type ID. Available values are:
	 *     <ul>
	 *     <li>1 - Unlimited stock with automatic synchronisation</li>
	 *     <li>2 - Limited and reserved stock</li>
	 *     <li>3 - Limited and unreserved stock</li>
	 *     <li>4 - Unlimited stock without automatich synchronisation</li>
	 *     </ul>
	 * @param int $statusId Filter that restricts the search result to listing market histories with a custom status status ID. Available values are:
	 *     <ul>
	 *     <li>1 - Active listing market histories</li>
	 *     <li>2 - Ended listing market histories</li>
	 *     <li>3 - Relisted listing market histories</li>
	 *     <li>4 - Hidden listing market histories</li>
	 *     </ul>
	 * @param string $stockCondition Filter that restricts the search result to listing market histories with a custom stock condition. Available values are 'stockNetLessEqualZero', 'stockNetLessZero', 'stockNetGreaterZero', 'stockGrossLessEqualZero', 'stockGrossLessZero', 'stockGrossGreaterZero', 'stockNetTotalLessEqualZero', 'stockNetTotalLessZero', 'stockNetTotalGreaterZero'
	 * @param string $updatedAtFrom Filter that restricts the search result to listing market histories that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to listing market histories that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $textData Filter that restricts the search result to listing market histories that match given text in listing title or description.
	 * @param string $firstPlatformCategoryId Filter that restricts the search result to listing market histories with first platform category ID equal to the given ID.
	 * @param string $secondPlatformCategoryId Filter that restricts the search result to listing market histories with second platform category ID equal to the given ID.
	 * @param string $firstShopCategoryId Filter that restricts the search result to listing market histories with first shop category ID equal to the given ID.
	 * @param string $secondShopCategoryId Filter that restricts the search result to listing market histories with second shop category ID equal to the given ID.
	 * @param string $thirdShopCategoryId Filter that restricts the search result to listing market histories with third shop category ID equal to the given ID.
	 * @param string $shippingProfileId Filter that restricts the search result to listing market histories that belong to a given shipping profile.
	 * @param string $lastSale Filter that restricts the search result to listing market histories with last sale before given date.The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $isEbayPlus Filter that restricts the search result to listing market histories that belong to eBay Plus.
	 * @param string $isClickAndCollect Filter that restricts the search result to listing market histories that belong to eBay Click & Collect.
	 * @param array $with An array with child instances to be loaded. Valid instances are 'listingMarket', 'texts', 'properties', 'prices', 'dates'.
	 */
	public function listListingMarketHistory(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $listingMarketId = null,
		?int $variationId = null,
		?string $variations = null,
		float|int|null $referrerId = null,
		?int $credentialsId = null,
		?int $directoryId = null,
		?string $verified = null,
		?string $duration = null,
		?string $externalId = null,
		?int $listingId = null,
		?int $itemId = null,
		?int $listingTypeId = null,
		?int $stockDependenceTypeId = null,
		?int $statusId = null,
		?string $stockCondition = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?string $textData = null,
		?string $firstPlatformCategoryId = null,
		?string $secondPlatformCategoryId = null,
		?string $firstShopCategoryId = null,
		?string $secondShopCategoryId = null,
		?string $thirdShopCategoryId = null,
		?string $shippingProfileId = null,
		?string $lastSale = null,
		?string $isEbayPlus = null,
		?string $isClickAndCollect = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListListingMarketHistory($page, $itemsPerPage, $listingMarketId, $variationId, $variations, $referrerId, $credentialsId, $directoryId, $verified, $duration, $externalId, $listingId, $itemId, $listingTypeId, $stockDependenceTypeId, $statusId, $stockCondition, $updatedAtFrom, $updatedAtTo, $textData, $firstPlatformCategoryId, $secondPlatformCategoryId, $firstShopCategoryId, $secondShopCategoryId, $thirdShopCategoryId, $shippingProfileId, $lastSale, $isEbayPlus, $isClickAndCollect, $with));
	}


	/**
	 * @param int $id The ID of the listing market history that needs to be ended. This must be passed as an array. This parameter is only needed if more than one listing market history should be ended.
	 * @param bool $deleteOnSuccess Tells if the listing market history should also be deleted from the database.
	 */
	public function endTheListing(int $id, ?bool $deleteOnSuccess = null): Response
	{
		return $this->connector->send(new EndTheListing($id, $deleteOnSuccess));
	}


	/**
	 * @param int $id The ID of the listing market history that needs to be relisted. This must be passed as an array. This parameter is only needed if more than one listing market history should be relisted.
	 */
	public function relistTheListing(int $id): Response
	{
		return $this->connector->send(new RelistTheListing($id));
	}


	/**
	 * @param array $id The ID of the listing market history that needs to be updated. This must be passed as an array. This parameter is only needed if more than one listing market history should be updated.
	 * @param array $options Multiple update options. Available values are:
	 *     <ul>
	 *     <li>all - Updates everything
	 *     <li>title - Updates the title
	 *     <li>subtitle - Updates the subtitle</li></li>
	 *     <li>itemSpecifics - Updates the item specifics</li>
	 *     <li>category - Updates the platform and shop category</li>
	 *     <li>listingDetails - Updates listing details</li>
	 *     <li>enhancements - Updates the enhancements information</li>
	 *     <li>duration - Updates the duration</li>
	 *     <li>shipping - Updates the shipping information</li>
	 *     <li>description - Updates the description</li>
	 *     <li>pictures - Updates the entry pictures</li>
	 *     <li>quantityAndPrice - Updates the quantity and price (also for variations)</li>
	 *     <li>resetVariations - Reset the variations. The variations from the item are transmitted again</li>
	 *     <li>partsFitmentList - Updates the parts fitment information (only available for eBay)</li>
	 *     <li>loyaltyProgram - Updates the listing loyalty program information (only available for eBay Plus)</li>
	 *     <li>resetRrp - Reset the recommended retail price information (only available for eBay)</li>
	 *     <li>payment - Updates payment information (only available for Hood)</li>
	 *     </ul>
	 */
	public function updateListingMarketHistories(array $id, ?array $options = null): Response
	{
		return $this->connector->send(new UpdateListingMarketHistories($id, $options));
	}


	/**
	 * @param int $id The ID of the listing market history entry.
	 * @param array $with An array with child instances to be loaded. One of 'listingMarket', 'texts', 'properties', 'dates', 'variations'.
	 */
	public function getListingMarketHistory(int $id, ?array $with = null): Response
	{
		return $this->connector->send(new GetListingMarketHistory($id, $with));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param int $id Filter that restricts the search result to listing market info that match the given ID(s).
	 * @param int $listingMarketId Filter that restricts the search result to listing market info that match the given listing market ID(s).
	 * @param string $type Filter that restricts the search result to listing market info with a custom type. Available values are 'warning', 'error', 'info'.
	 * @param int $code Filter that restricts the search result to listing market info with given codes.
	 * @param string $createdAtFrom Filter that restricts the search result to listing markets that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to listing markets that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param array $with An array with child instances to be loaded.
	 */
	public function searchListingMarketInfo(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?int $listingMarketId = null,
		?string $type = null,
		?int $code = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new SearchListingMarketInfo($page, $itemsPerPage, $id, $listingMarketId, $type, $code, $createdAtFrom, $createdAtTo, $with));
	}


	public function getsAllListingMarketItemSpecifics(): Response
	{
		return $this->connector->send(new GetsAllListingMarketItemSpecifics());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getsAllListingMarketItemSpecificsDuplicate1(): Response
	{
		return $this->connector->send(new GetsAllListingMarketItemSpecifics());
	}


	/**
	 * @param int $id
	 */
	public function getsListingMarketItemSpecific(int $id): Response
	{
		return $this->connector->send(new GetsListingMarketItemSpecific($id));
	}


	/**
	 * @param int $id
	 */
	public function updatesListingMarketItemSpecific(int $id): Response
	{
		return $this->connector->send(new UpdatesListingMarketItemSpecific($id));
	}


	/**
	 * @param int $id
	 */
	public function deletesListingMarketItemSpecific(int $id): Response
	{
		return $this->connector->send(new DeletesListingMarketItemSpecific($id));
	}


	/**
	 * @param int $id The ID of the listing market that needs to be started. This can also be passed as an array.
	 * @param string $startAt When should the listings be started. The date has to be in the format, e.g. '2019-04-04 12:40:00'.
	 * @param int $distribution The number of minutes that the listing should be started.
	 */
	public function startTheMarketListingOnTheDesignatedMarket(
		int $id,
		?string $startAt = null,
		?int $distribution = null,
	): Response
	{
		return $this->connector->send(new StartTheMarketListingOnTheDesignatedMarket($id, $startAt, $distribution));
	}


	/**
	 * @param int $id Filter that restricts the search result to listing market texts with specific ID. Several IDs can be entered as array.
	 * @param int $listingMarketId Filter that restricts the search result to listing market texts with specific listing market IDs. Several IDs can be entered as array.
	 * @param string $language Filter that restricts the search result to listing market texts for a specific language. @see listing market text model language for the complete available list of language types.
	 * @param string $contains Filter that restricts the search result to listing market texts which title, subtitle or description contain the given value.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 */
	public function listListingMarketTexts(
		?int $id = null,
		?int $listingMarketId = null,
		?string $language = null,
		?string $contains = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListListingMarketTexts($id, $listingMarketId, $language, $contains, $page, $itemsPerPage));
	}


	/**
	 * @param int $listingMarketId The listing market ID this text belongs to.
	 */
	public function createListingMarketText(int $listingMarketId): Response
	{
		return $this->connector->send(new CreateListingMarketText($listingMarketId));
	}


	/**
	 * @param int $id The ID of the listing market text entry.
	 */
	public function getListingMarketText(int $id): Response
	{
		return $this->connector->send(new GetListingMarketText($id));
	}


	/**
	 * @param int $id
	 * @param string $lang The listing market text language that should be updated.
	 * @param int $listingMarketId The listing market ID this text belongs to.
	 */
	public function deleteListingMarketText(int $id, string $lang, int $listingMarketId): Response
	{
		return $this->connector->send(new DeleteListingMarketText($id, $lang, $listingMarketId));
	}


	/**
	 * @param int $listingMarketId The listing market ID this text belongs to.
	 * @param string $lang The listing market text language that should be updated.
	 */
	public function updateListingMarketText(int $listingMarketId, string $lang): Response
	{
		return $this->connector->send(new UpdateListingMarketText($listingMarketId, $lang));
	}


	/**
	 * @param int $id The ID of the listing market that need to be verified. This can also be passed as an array.
	 */
	public function verifyListingMarkets(int $id): Response
	{
		return $this->connector->send(new VerifyListingMarkets($id));
	}


	/**
	 * @param int $id The ID of the listing market entry.
	 * @param array $with An array with child instances to be loaded. One of 'listing', 'texts', 'properties', 'itemSpecifics', 'prices', 'dates', 'infos'.
	 */
	public function getListingMarket(int $id, ?array $with = null): Response
	{
		return $this->connector->send(new GetListingMarket($id, $with));
	}


	/**
	 * @param int $id The listing market ID.
	 * @param float|int $referrerId The referrer ID.
	 */
	public function updateListingMarket(int $id, float|int $referrerId): Response
	{
		return $this->connector->send(new UpdateListingMarket($id, $referrerId));
	}


	/**
	 * @param int $id The listing market ID.
	 */
	public function deleteListingMarket(int $id): Response
	{
		return $this->connector->send(new DeleteListingMarket($id));
	}


	public function createOptionTemplate(): Response
	{
		return $this->connector->send(new CreateOptionTemplate());
	}


	public function getPreviewListOfOptionTemplates(): Response
	{
		return $this->connector->send(new GetPreviewListOfOptionTemplates());
	}


	/**
	 * @param int $id The ID of the option template entry.
	 */
	public function getOptionTemplate(int $id): Response
	{
		return $this->connector->send(new GetOptionTemplate($id));
	}


	/**
	 * @param int $id The option template ID.
	 */
	public function updateOptionTemplate(int $id): Response
	{
		return $this->connector->send(new UpdateOptionTemplate($id));
	}


	/**
	 * @param int $id The option template ID.
	 */
	public function deleteOptionTemplate(int $id): Response
	{
		return $this->connector->send(new DeleteOptionTemplate($id));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param int $id Filter that restricts the search result to listing shipping profiles that match the given ID(s).
	 * @param float|int $referrerId Filter that restricts the search result to listing shipping profiles with given referrer ID(s).
	 * @param int $credentialsId Filter that restricts the search result to listing shipping profiles with given credential ID(s).
	 */
	public function listListingShippingProfiles(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		float|int|null $referrerId = null,
		?int $credentialsId = null,
	): Response
	{
		return $this->connector->send(new ListListingShippingProfiles($page, $itemsPerPage, $id, $referrerId, $credentialsId));
	}


	/**
	 * @param int $id The ID of the listing shipping profile entry.
	 * @param array $with An array with child instances to be loaded.
	 */
	public function getShippingProfile(int $id, ?array $with = null): Response
	{
		return $this->connector->send(new GetShippingProfile($id, $with));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param array $with An array with child instances to be loaded. Available values: 'names'.
	 */
	public function listListingStockDependenceTypes(
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListListingStockDependenceTypes($page, $itemsPerPage, $with));
	}


	/**
	 * @param int $id The ID of the listing stock dependence type entry.
	 * @param array $with An array with child instances to be loaded. Available values: 'names'.
	 */
	public function getListingStockDependenceType(int $id, ?array $with = null): Response
	{
		return $this->connector->send(new GetListingStockDependenceType($id, $with));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 */
	public function listListingTypes(?int $page = null, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListListingTypes($page, $itemsPerPage));
	}


	/**
	 * @param int $id The ID of the listing type entry.
	 * @param array $with An array with child instances to be loaded. Available values: 'names'.
	 */
	public function getListingType(int $id, ?array $with = null): Response
	{
		return $this->connector->send(new GetListingType($id, $with));
	}


	/**
	 * @param int $id The ID of the listing entry.
	 * @param array $with An array with child instances to be loaded. One of 'stockDependenceType', 'type', 'markets', 'properties'.
	 */
	public function getListing(int $id, ?array $with = null): Response
	{
		return $this->connector->send(new GetListing($id, $with));
	}


	/**
	 * @param int $id The ID of the listing.
	 */
	public function updateListing(int $id): Response
	{
		return $this->connector->send(new UpdateListing($id));
	}


	/**
	 * @param int $id The listing ID.
	 */
	public function deleteListing(int $id): Response
	{
		return $this->connector->send(new DeleteListing($id));
	}
}
