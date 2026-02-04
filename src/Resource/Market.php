<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Market\CreateCorrelation;
use PlentyOne\Api\Requests\Market\CreateCredential;
use PlentyOne\Api\Requests\Market\CreateFitment;
use PlentyOne\Api\Requests\Market\CreateFulfillmentPolicy;
use PlentyOne\Api\Requests\Market\CreateMarketSettings;
use PlentyOne\Api\Requests\Market\CreateMultipleCorrelations;
use PlentyOne\Api\Requests\Market\CreatePaymentPolicy;
use PlentyOne\Api\Requests\Market\CreateReturnPolicy;
use PlentyOne\Api\Requests\Market\DeleteCredential;
use PlentyOne\Api\Requests\Market\DeleteFitment;
use PlentyOne\Api\Requests\Market\DeleteFulfillmentPolicy;
use PlentyOne\Api\Requests\Market\DeleteMarketSettings;
use PlentyOne\Api\Requests\Market\DeletePaymentPolicy;
use PlentyOne\Api\Requests\Market\GetAllEBayMarketplaces;
use PlentyOne\Api\Requests\Market\GetAllListingMarketplaces;
use PlentyOne\Api\Requests\Market\GetCategory;
use PlentyOne\Api\Requests\Market\GetCredential;
use PlentyOne\Api\Requests\Market\GetFitment;
use PlentyOne\Api\Requests\Market\GetFulfillmentPolicy;
use PlentyOne\Api\Requests\Market\GetMarketSettings;
use PlentyOne\Api\Requests\Market\GetPaymentPolicy;
use PlentyOne\Api\Requests\Market\GetReturnPolicy;
use PlentyOne\Api\Requests\Market\GetTheLoginUrl;
use PlentyOne\Api\Requests\Market\ListAllCredentials;
use PlentyOne\Api\Requests\Market\ListAllEBayShopCategories;
use PlentyOne\Api\Requests\Market\ListCategories;
use PlentyOne\Api\Requests\Market\ListCorrelation;
use PlentyOne\Api\Requests\Market\ListCredentials;
use PlentyOne\Api\Requests\Market\ListFitments;
use PlentyOne\Api\Requests\Market\ListItemSpecifics;
use PlentyOne\Api\Requests\Market\ListMarketSettings;
use PlentyOne\Api\Requests\Market\ListTransactions;
use PlentyOne\Api\Requests\Market\RefreshExpiredAccessToken;
use PlentyOne\Api\Requests\Market\SearchFitments;
use PlentyOne\Api\Requests\Market\UpdateCredential;
use PlentyOne\Api\Requests\Market\UpdateFitment;
use PlentyOne\Api\Requests\Market\UpdateFulfillmentPolicy;
use PlentyOne\Api\Requests\Market\UpdateMarketSettings;
use PlentyOne\Api\Requests\Market\UpdatePaymentPolicy;
use PlentyOne\Api\Requests\Market\UpdateReturnPolicy;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Market extends BaseResource
{
	/**
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The items per page to search for
	 */
	public function listCredentials(int $page, int $itemsPerPage): Response
	{
		return $this->connector->send(new ListCredentials($page, $itemsPerPage));
	}


	public function createCredential(): Response
	{
		return $this->connector->send(new CreateCredential());
	}


	public function listAllCredentials(): Response
	{
		return $this->connector->send(new ListAllCredentials());
	}


	/**
	 * @param int $credentialsId
	 * @param int $id The ID of the credentials to be found.
	 */
	public function getCredential(int $credentialsId, int $id): Response
	{
		return $this->connector->send(new GetCredential($credentialsId, $id));
	}


	/**
	 * @param int $credentialsId
	 */
	public function updateCredential(int $credentialsId): Response
	{
		return $this->connector->send(new UpdateCredential($credentialsId));
	}


	/**
	 * @param int $credentialsId
	 * @param int $id The ID of the credentials to be deleted.
	 */
	public function deleteCredential(int $credentialsId, int $id): Response
	{
		return $this->connector->send(new DeleteCredential($credentialsId, $id));
	}


	public function getTheLoginUrl(): Response
	{
		return $this->connector->send(new GetTheLoginUrl());
	}


	public function refreshExpiredAccessToken(): Response
	{
		return $this->connector->send(new RefreshExpiredAccessToken());
	}


	/**
	 * @param string $marketplaceId Filter that restricts the search result to categories that belong to the specified marketplace ID.
	 * @param string $categoryId Filter that restricts the search result to categories that belong to the specified category ID.
	 */
	public function listCategories(string $marketplaceId, ?string $categoryId = null): Response
	{
		return $this->connector->send(new ListCategories($marketplaceId, $categoryId));
	}


	/**
	 * @param int $id The ID of the category to be found.
	 */
	public function getCategory(int $id): Response
	{
		return $this->connector->send(new GetCategory($id));
	}


	/**
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function createFulfillmentPolicy(string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new CreateFulfillmentPolicy($marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function getFulfillmentPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new GetFulfillmentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function updateFulfillmentPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new UpdateFulfillmentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function deleteFulfillmentPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new DeleteFulfillmentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $categoryId The ID of the category for which to list item specifics
	 * @param string $marketplaceId Filter that restricts the search result to categories that belong to the specified marketplace ID.
	 */
	public function listItemSpecifics(int $categoryId, string $marketplaceId): Response
	{
		return $this->connector->send(new ListItemSpecifics($categoryId, $marketplaceId));
	}


	/**
	 * @param float|int $referrerId Get only marketplaces that match the given referrer ID
	 * @param string $marketplaceId Get only marketplaces that match the given marketplace ID
	 * @param int $marketId Get only marketplaces that match the given market ID
	 * @param int $siteId Get only marketplaces that match the given site ID
	 */
	public function getAllEbayMarketplaces(
		float|int|null $referrerId = null,
		?string $marketplaceId = null,
		?int $marketId = null,
		?int $siteId = null,
	): Response
	{
		return $this->connector->send(new GetAllEBayMarketplaces($referrerId, $marketplaceId, $marketId, $siteId));
	}


	public function listFitments(): Response
	{
		return $this->connector->send(new ListFitments());
	}


	public function createFitment(): Response
	{
		return $this->connector->send(new CreateFitment());
	}


	/**
	 * @param int $categoryId Filter that restricts the search result to fitments with specific eBay category ID. Several IDs can be entered as array.
	 * @param int $id Filter that restricts the search result to fitments with specific ID. Several IDs can be entered as array.
	 * @param int $marketId Filter that restricts the search result to fitments with specific market ID. Several IDs can be entered as array.
	 * @param string $name Filter that restricts the search result to fitments with specific name.
	 * @param string $propertyName Filter that restricts the search result to fitments with specific property name.
	 * @param string $propertyValue Filter that restricts the search result to fitments with specific property value.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param array $with An array with child instances to be loaded. Available values: 'items', 'items.properties'.
	 */
	public function searchFitments(
		?int $categoryId = null,
		?int $id = null,
		?int $marketId = null,
		?string $name = null,
		?string $propertyName = null,
		?string $propertyValue = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new SearchFitments($categoryId, $id, $marketId, $name, $propertyName, $propertyValue, $page, $itemsPerPage, $with));
	}


	/**
	 * @param int $fitmentId
	 * @param int $id The fitment ID.
	 */
	public function getFitment(int $fitmentId, int $id): Response
	{
		return $this->connector->send(new GetFitment($fitmentId, $id));
	}


	/**
	 * @param int $fitmentId
	 * @param int $id The ID of the fitment list.
	 */
	public function updateFitment(int $fitmentId, int $id): Response
	{
		return $this->connector->send(new UpdateFitment($fitmentId, $id));
	}


	/**
	 * @param int $fitmentId
	 * @param int $id The fitment ID.
	 */
	public function deleteFitment(int $fitmentId, int $id): Response
	{
		return $this->connector->send(new DeleteFitment($fitmentId, $id));
	}


	/**
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function createPaymentPolicy(string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new CreatePaymentPolicy($marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function getPaymentPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new GetPaymentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function updatePaymentPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new UpdatePaymentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function deletePaymentPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new DeletePaymentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function createReturnPolicy(string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new CreateReturnPolicy($marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function getReturnPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new GetReturnPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function updateReturnPolicy(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new UpdateReturnPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function deletePaymentPolicyDuplicate1(int $id, string $marketplaceId, int $credentialsId): Response
	{
		return $this->connector->send(new DeletePaymentPolicy($id, $marketplaceId, $credentialsId));
	}


	/**
	 * @param int $credentialsId The credentials ID for whom to fetch eBay shop categories.
	 * @param string $viewType How should the eBay shop categories be returned. Possible values: 'list' or 'tree'. Default is 'list'
	 */
	public function listAllEbayShopCategories(int $credentialsId, ?string $viewType = null): Response
	{
		return $this->connector->send(new ListAllEBayShopCategories($credentialsId, $viewType));
	}


	/**
	 * @param int $orderId Filter that restricts the search result to transactions with specific ID. Use -1 for open orders
	 * @param int $externalOrderId Filter that restricts the search result to transactions with specific external order ID.
	 * @param int $transactionId Filter that restricts the search result to transactions with specific transaction ID.
	 * @param int $credentialsId Filter that restricts the search result to transactions with specific credentials ID.
	 * @param string $buyerUserId Filter that restricts the search result to transactions with specific buyer user ID.
	 * @param string $createdAt Filter that restricts the search result to transactions with specific creation date.
	 * @param string $endTime Filter that restricts the search result to transactions with end time date.
	 * @param string $importStatus Filter that restricts the search result to transactions with specific import status. Possible values are: NEW, IN_PROGRESS, DONE.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 */
	public function listTransactions(
		?int $orderId = null,
		?int $externalOrderId = null,
		?int $transactionId = null,
		?int $credentialsId = null,
		?string $buyerUserId = null,
		?string $createdAt = null,
		?string $endTime = null,
		?string $importStatus = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListTransactions($orderId, $externalOrderId, $transactionId, $credentialsId, $buyerUserId, $createdAt, $endTime, $importStatus, $page, $itemsPerPage));
	}


	/**
	 * @param float|int $referrerId Get only marketplaces that match the given referrer ID
	 * @param string $marketplaceId Get only marketplaces that match the given marketplace ID
	 * @param int $marketId Get only marketplaces that match the given market ID
	 * @param int $siteId Get only marketplaces that match the given site ID
	 */
	public function getAllListingMarketplaces(
		float|int|null $referrerId = null,
		?string $marketplaceId = null,
		?int $marketId = null,
		?int $siteId = null,
	): Response
	{
		return $this->connector->send(new GetAllListingMarketplaces($referrerId, $marketplaceId, $marketId, $siteId));
	}


	public function listMarketSettings(): Response
	{
		return $this->connector->send(new ListMarketSettings());
	}


	public function createMarketSettings(): Response
	{
		return $this->connector->send(new CreateMarketSettings());
	}


	public function updateMarketSettings(): Response
	{
		return $this->connector->send(new UpdateMarketSettings());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createMarketSettingsDuplicate2(): Response
	{
		return $this->connector->send(new CreateMarketSettings());
	}


	public function listCorrelation(): Response
	{
		return $this->connector->send(new ListCorrelation());
	}


	public function createCorrelation(): Response
	{
		return $this->connector->send(new CreateCorrelation());
	}


	public function createMultipleCorrelations(): Response
	{
		return $this->connector->send(new CreateMultipleCorrelations());
	}


	/**
	 * @param int $settingId
	 */
	public function getMarketSettings(int $settingId): Response
	{
		return $this->connector->send(new GetMarketSettings($settingId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $settingId
	 */
	public function updateMarketSettingsDuplicate3(int $settingId): Response
	{
		return $this->connector->send(new UpdateMarketSettings($settingId));
	}


	/**
	 * @param int $settingId
	 */
	public function deleteMarketSettings(int $settingId): Response
	{
		return $this->connector->send(new DeleteMarketSettings($settingId));
	}
}
