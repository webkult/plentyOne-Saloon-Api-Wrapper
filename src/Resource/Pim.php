<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationBarcodes;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationBundleComponents;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationCategories;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationComments;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationDefaultCategories;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationMarketIdentNumbers;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationProperties;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationSalesPrices;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationSkus;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationSuppliers;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariationWarehouses;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateListOfVariations;
use PlentyOne\Api\Requests\Pim\CreateAndUpdateVariationAdditionalSkus;
use PlentyOne\Api\Requests\Pim\CreateItemSerialNumbers;
use PlentyOne\Api\Requests\Pim\CreateListOfAttributeNames;
use PlentyOne\Api\Requests\Pim\CreateListOfAttributeValueNames;
use PlentyOne\Api\Requests\Pim\CreateListOfAttributeValues;
use PlentyOne\Api\Requests\Pim\CreateListOfAttributes;
use PlentyOne\Api\Requests\Pim\CreateListOfBarcodes;
use PlentyOne\Api\Requests\Pim\CreateListOfSalesPrices;
use PlentyOne\Api\Requests\Pim\CreateListOfVariationClients;
use PlentyOne\Api\Requests\Pim\CreateListOfVariationImages;
use PlentyOne\Api\Requests\Pim\CreateListOfVariationMarkets;
use PlentyOne\Api\Requests\Pim\CreateListOfVariationTags;
use PlentyOne\Api\Requests\Pim\CreateListOfVariationsAndTheirRelatedData;
use PlentyOne\Api\Requests\Pim\DeleteItemSerialNumbers;
use PlentyOne\Api\Requests\Pim\DeleteListOfAttributeNames;
use PlentyOne\Api\Requests\Pim\DeleteListOfAttributeValueNames;
use PlentyOne\Api\Requests\Pim\DeleteListOfAttributeValues;
use PlentyOne\Api\Requests\Pim\DeleteListOfAttributes;
use PlentyOne\Api\Requests\Pim\DeleteListOfBarcodes;
use PlentyOne\Api\Requests\Pim\DeleteListOfSalesPrices;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationAdditionalSkus;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationClients;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationMarketIdentNumbers;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationMarkets;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationProperties;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationSalesPrices;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationSkus;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationSupplier;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationTags;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariationWarehouses;
use PlentyOne\Api\Requests\Pim\DeleteListOfVariations;
use PlentyOne\Api\Requests\Pim\DeleteVariationBarcodes;
use PlentyOne\Api\Requests\Pim\DeleteVariationBundleComponents;
use PlentyOne\Api\Requests\Pim\DeleteVariationCategories;
use PlentyOne\Api\Requests\Pim\DeleteVariationComments;
use PlentyOne\Api\Requests\Pim\DeleteVariationDefaultCategories;
use PlentyOne\Api\Requests\Pim\DeleteVariationImages;
use PlentyOne\Api\Requests\Pim\GetAllBarcodeDuplicates;
use PlentyOne\Api\Requests\Pim\GetAllExistingVariationCombinationsForCurrentItem;
use PlentyOne\Api\Requests\Pim\GetAllVariationsScrolledByCursor;
use PlentyOne\Api\Requests\Pim\GetAttributesLinkedToGivenItem;
use PlentyOne\Api\Requests\Pim\GetBarcodeDuplicates;
use PlentyOne\Api\Requests\Pim\GetItemAmazonProductTypes;
use PlentyOne\Api\Requests\Pim\GetOneAttribute;
use PlentyOne\Api\Requests\Pim\GetOneAttributeValue;
use PlentyOne\Api\Requests\Pim\GetOneCategoryByGivenId;
use PlentyOne\Api\Requests\Pim\GetOneSalesPriceById;
use PlentyOne\Api\Requests\Pim\ListBarcodesDuplicateSettings;
use PlentyOne\Api\Requests\Pim\ListVariationsIncludingTheSpecifiedRelatedData;
use PlentyOne\Api\Requests\Pim\SearchAttributeNames;
use PlentyOne\Api\Requests\Pim\SearchAttributeValueNames;
use PlentyOne\Api\Requests\Pim\SearchAttributeValues;
use PlentyOne\Api\Requests\Pim\SearchCategories;
use PlentyOne\Api\Requests\Pim\SearchCategoryBranches;
use PlentyOne\Api\Requests\Pim\SearchCategoryClients;
use PlentyOne\Api\Requests\Pim\SearchCategoryDetails;
use PlentyOne\Api\Requests\Pim\SearchCategoryProperties;
use PlentyOne\Api\Requests\Pim\SearchForAttributes;
use PlentyOne\Api\Requests\Pim\SearchForBarcodes;
use PlentyOne\Api\Requests\Pim\SearchForItemSerialNumbers;
use PlentyOne\Api\Requests\Pim\SearchForSalesPrices;
use PlentyOne\Api\Requests\Pim\UpdateItemSerialNumbers;
use PlentyOne\Api\Requests\Pim\UpdateListOfAttributeNames;
use PlentyOne\Api\Requests\Pim\UpdateListOfAttributeValueNames;
use PlentyOne\Api\Requests\Pim\UpdateListOfAttributeValues;
use PlentyOne\Api\Requests\Pim\UpdateListOfAttributes;
use PlentyOne\Api\Requests\Pim\UpdateListOfBarcodes;
use PlentyOne\Api\Requests\Pim\UpdateListOfSalesPrices;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Pim extends BaseResource
{
	public function getItemAmazonProductTypes(): Response
	{
		return $this->connector->send(new GetItemAmazonProductTypes());
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attributeNames' = The attribute names of the attribute.</li><li> 'values' = The attribute values of the attribute.</li><li> 'maps' = The attribute maps of the attribute.</li></ub>
	 * @param string $ids Filter restricts the result to attributes with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $backendName Filter restricts the result to attributes with the specified backend name. Allowed comparators: 'eq' and 'in'.
	 * @param string $name Filter restricts the result to attributes with the specified name. Allowed comparators: 'eq'.
	 * @param int $position Filter restricts the result to attributes with the specified position. Allowed comparator: 'eq', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $updatedAt Filter restricts the result to attributes which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function searchForAttributes(
		?string $with = null,
		?string $ids = null,
		?string $backendName = null,
		?string $name = null,
		?int $position = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new SearchForAttributes($with, $ids, $backendName, $name, $position, $updatedAt));
	}


	public function updateListOfAttributes(): Response
	{
		return $this->connector->send(new UpdateListOfAttributes());
	}


	public function createListOfAttributes(): Response
	{
		return $this->connector->send(new CreateListOfAttributes());
	}


	public function deleteListOfAttributes(): Response
	{
		return $this->connector->send(new DeleteListOfAttributes());
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attribute' = The attribute to the attribute name.</li></ub>
	 * @param string $attributeId Filter restricts the result to attributes with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'
	 * @param string $lang Filter restricts the result to attributes with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param string $name Filter restricts the result to attributes with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function searchAttributeNames(
		?string $with = null,
		?string $attributeId = null,
		?string $lang = null,
		?string $name = null,
	): Response
	{
		return $this->connector->send(new SearchAttributeNames($with, $attributeId, $lang, $name));
	}


	public function updateListOfAttributeNames(): Response
	{
		return $this->connector->send(new UpdateListOfAttributeNames());
	}


	public function createListOfAttributeNames(): Response
	{
		return $this->connector->send(new CreateListOfAttributeNames());
	}


	public function deleteListOfAttributeNames(): Response
	{
		return $this->connector->send(new DeleteListOfAttributeNames());
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'valueNames' = The names of the attribute value.</li><li> 'attribute' = The attribute of the attribute value.</li><li> 'valueMaps' = The maps of the attribute value.</li><li> 'valueMarketNames' = The value market names of the attribute value.</li></ub>
	 * @param string $ids Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $attributeId Filter restricts the result to attribute values with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $backendName Filter restricts the result to attribute values with the specified backend name. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param string $name Filter restricts the result to attribute values with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 * @param string $position Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $updatedAt Filter restricts the result to attribute values which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function searchAttributeValues(
		?string $with = null,
		?string $ids = null,
		?string $attributeId = null,
		?string $backendName = null,
		?string $name = null,
		?string $position = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new SearchAttributeValues($with, $ids, $attributeId, $backendName, $name, $position, $updatedAt));
	}


	public function updateListOfAttributeValues(): Response
	{
		return $this->connector->send(new UpdateListOfAttributeValues());
	}


	public function createListOfAttributeValues(): Response
	{
		return $this->connector->send(new CreateListOfAttributeValues());
	}


	public function deleteListOfAttributeValues(): Response
	{
		return $this->connector->send(new DeleteListOfAttributeValues());
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attributeValue' = The attribute value to the attribute value name.</li></ub>
	 * @param string $valueId Filter restricts the result to attribute value names with the specified value ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'
	 * @param string $lang Filter restricts the result to attribute value names with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param string $name Filter restricts the result to attribute value names with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function searchAttributeValueNames(
		?string $with = null,
		?string $valueId = null,
		?string $lang = null,
		?string $name = null,
	): Response
	{
		return $this->connector->send(new SearchAttributeValueNames($with, $valueId, $lang, $name));
	}


	public function updateListOfAttributeValueNames(): Response
	{
		return $this->connector->send(new UpdateListOfAttributeValueNames());
	}


	public function createListOfAttributeValueNames(): Response
	{
		return $this->connector->send(new CreateListOfAttributeValueNames());
	}


	public function deleteListOfAttributeValueNames(): Response
	{
		return $this->connector->send(new DeleteListOfAttributeValueNames());
	}


	/**
	 * @param int $id
	 */
	public function getOneAttributeValue(int $id): Response
	{
		return $this->connector->send(new GetOneAttributeValue($id));
	}


	/**
	 * @param int $id
	 */
	public function getOneAttribute(int $id): Response
	{
		return $this->connector->send(new GetOneAttribute($id));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'referrers' = The referrers of the barcode </li></ub>
	 * @param string $ids Filter restricts the result to barcodes with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $code Filter restricts the result to barcodes with the specified code. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param string $type Filter restricts the result to barcodes with the specified type. More than one parameter should be separated by commas. Allowed comparator: 'eq', 'in' and 'not'.
	 * @param string $referrerIds Filter restricts the result to barcodes with the specified referrers. More than one parameter should be separated by commas. Allowed comparator: 'eq' and 'in'.
	 */
	public function searchForBarcodes(
		?string $with = null,
		?string $ids = null,
		?string $code = null,
		?string $type = null,
		?string $referrerIds = null,
	): Response
	{
		return $this->connector->send(new SearchForBarcodes($with, $ids, $code, $type, $referrerIds));
	}


	public function updateListOfBarcodes(): Response
	{
		return $this->connector->send(new UpdateListOfBarcodes());
	}


	public function createListOfBarcodes(): Response
	{
		return $this->connector->send(new CreateListOfBarcodes());
	}


	public function deleteListOfBarcodes(): Response
	{
		return $this->connector->send(new DeleteListOfBarcodes());
	}


	public function getAllBarcodeDuplicates(): Response
	{
		return $this->connector->send(new GetAllBarcodeDuplicates());
	}


	public function getBarcodeDuplicates(): Response
	{
		return $this->connector->send(new GetBarcodeDuplicates());
	}


	public function listBarcodesDuplicateSettings(): Response
	{
		return $this->connector->send(new ListBarcodesDuplicateSettings());
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'details' = The names of the category.</li><li> 'clients' = The clients of the category.</li><li> 'branch' = The branch of the category.</li><li> 'tagRelationship' = The tags linked with the category and their data.</li><li> 'elmarCategories' = The elmar categories of the category.</li></ub>
	 * @param string $ids Filter restricts the result to categories with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $type Filter restricts the result to categories with the specified type. Allowed comparators: 'eq', 'in' and 'not'.
	 * @param int $level Filter restricts the result to categories with the specified level. Allowed comparators: 'eq', 'not', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $name Filter restricts the result to categories with a category detail in the specified name. Allowed comparators: 'eq'.
	 * @param string $lang Filter restricts the result to categories with a category detail in the specified lang. Allowed comparators: 'eq' and 'not'.
	 * @param int $parentCategoryId Filter restricts the result to categories with the specified parent category ID. Allowed comparator: 'eq'.
	 * @param int $plentyId Filter restricts the result to categories with the specified plenty ID. Allowed comparator: 'eq'.
	 * @param bool $linklist Filter restricts the result to categories with the specified linklist value. Allowed comparator: 'eq'.
	 * @param string $tagId Filter restricts the result to categories with the specified tag id. Allowed comparator: 'eq', 'in' and 'not'.
	 * @param string $updatedAt Filter restricts the result to categories which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $sortBy Filter sorts the result of categories. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'id'</li><li>'position'</li><li>'name'</li><li>'level'</li><li>'parentCategoryId'</li><li>'updatedAt'</li></ul>
	 */
	public function searchCategories(
		?string $with = null,
		?string $ids = null,
		?string $type = null,
		?int $level = null,
		?string $name = null,
		?string $lang = null,
		?int $parentCategoryId = null,
		?int $plentyId = null,
		?bool $linklist = null,
		?string $tagId = null,
		?string $updatedAt = null,
		?string $sortBy = null,
	): Response
	{
		return $this->connector->send(new SearchCategories($with, $ids, $type, $level, $name, $lang, $parentCategoryId, $plentyId, $linklist, $tagId, $updatedAt, $sortBy));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category branch.</li></ub>
	 */
	public function searchCategoryBranches(?string $with = null): Response
	{
		return $this->connector->send(new SearchCategoryBranches($with));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category client.</li></ub>
	 * @param string $categoryId Filter restricts the result to category clients with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param int $plentyId Filter restricts the result to category clients with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function searchCategoryClients(
		?string $with = null,
		?string $categoryId = null,
		?int $plentyId = null,
	): Response
	{
		return $this->connector->send(new SearchCategoryClients($with, $categoryId, $plentyId));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category detail.</li></ub>
	 * @param string $categoryId Filter restricts the result to category details with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param int $plentyId Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 * @param string $lang Filter restricts the result to category details with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in' and 'not'.
	 * @param string $name Filter restricts the result to category details with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
	 * @param string $nameUrl Filter restricts the result to category details with the specified name url. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
	 * @param string $metaKeywords Filter restricts the result to category details with the specified meta keywords. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
	 * @param string $position Filter restricts the result to category details with the specified position. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function searchCategoryDetails(
		?string $with = null,
		?string $categoryId = null,
		?int $plentyId = null,
		?string $lang = null,
		?string $name = null,
		?string $nameUrl = null,
		?string $metaKeywords = null,
		?string $position = null,
	): Response
	{
		return $this->connector->send(new SearchCategoryDetails($with, $categoryId, $plentyId, $lang, $name, $nameUrl, $metaKeywords, $position));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the property.</li></ub>
	 * @param string $categoryId Filter restricts the result to category properties with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param int $plentyId Filter restricts the result to category properties with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 * @param string $value Filter restricts the result to category properties with the specified value. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function searchCategoryProperties(
		?string $with = null,
		?string $categoryId = null,
		?int $plentyId = null,
		?string $value = null,
	): Response
	{
		return $this->connector->send(new SearchCategoryProperties($with, $categoryId, $plentyId, $value));
	}


	/**
	 * @param int $id
	 */
	public function getOneCategoryByGivenId(int $id): Response
	{
		return $this->connector->send(new GetOneCategoryByGivenId($id));
	}


	public function searchForItemSerialNumbers(): Response
	{
		return $this->connector->send(new SearchForItemSerialNumbers());
	}


	public function updateItemSerialNumbers(): Response
	{
		return $this->connector->send(new UpdateItemSerialNumbers());
	}


	public function createItemSerialNumbers(): Response
	{
		return $this->connector->send(new CreateItemSerialNumbers());
	}


	public function deleteItemSerialNumbers(): Response
	{
		return $this->connector->send(new DeleteItemSerialNumbers());
	}


	/**
	 * @param int $id
	 */
	public function getAttributesLinkedToGivenItem(int $id): Response
	{
		return $this->connector->send(new GetAttributesLinkedToGivenItem($id));
	}


	/**
	 * @param int $id
	 */
	public function getAllExistingVariationCombinationsForCurrentItem(int $id): Response
	{
		return $this->connector->send(new GetAllExistingVariationCombinationsForCurrentItem($id));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>accounts = The accounts of the sales price.</li><li>clients = The clients of the sales price.</li><li>countries = The countries of the sales price.</li><li>currencies = The currencies of the sales price.</li><li>customerClasses = The customer classes of the sales price.</li><li>names = The names of the sales price.</li><li>referrers = The referrer of the sales price.</li></ub>
	 * @param string $ids Filter restricts the result to sales prices with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param string $type Filter restricts the result to sales prices with the specified type. Allowed comparators: 'eq' and 'in'.
	 * @param int $customerClassId Filter restricts the result to sales prices with the specified customer class.
	 * @param int $currency Filter restricts the result to sales prices with the specified currency.
	 * @param int $countryId Filter restricts the result to sales prices with the specified country.
	 * @param string $name Filter restricts the result to sales prices with the specified name.
	 * @param int $referrerId Filter restricts the result to sales prices with the specified referrer.
	 * @param int $plentyId Filter restricts the result to sales prices with the specified plenty ID.
	 * @param string $updatedAt Filter restricts the result to sales prices which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function searchForSalesPrices(
		?string $with = null,
		?string $ids = null,
		?string $type = null,
		?int $customerClassId = null,
		?int $currency = null,
		?int $countryId = null,
		?string $name = null,
		?int $referrerId = null,
		?int $plentyId = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new SearchForSalesPrices($with, $ids, $type, $customerClassId, $currency, $countryId, $name, $referrerId, $plentyId, $updatedAt));
	}


	public function updateListOfSalesPrices(): Response
	{
		return $this->connector->send(new UpdateListOfSalesPrices());
	}


	public function createListOfSalesPrices(): Response
	{
		return $this->connector->send(new CreateListOfSalesPrices());
	}


	public function deleteListOfSalesPrices(): Response
	{
		return $this->connector->send(new DeleteListOfSalesPrices());
	}


	/**
	 * @param int $id
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>accounts</li><li>clients</li><li>countries</li><li>currencies</li><li>customerClasses</li><li>names</li><li>referrers</li></ub>
	 */
	public function getOneSalesPriceById(int $id, ?string $with = null): Response
	{
		return $this->connector->send(new GetOneSalesPriceById($id, $with));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'additionalSkus' = The additional skus of the variation.</li><li>'attributeValues' = The attribute values of the variation.</li><li>'attributeValues.attribute' = Includes attributeValues. The attribute data to the related attribute ID.</li><li>'attributeValues.attributeValue' = Includes attributeValues. The attribute value data to the related attribute value ID.</li><li>'barcodes' = The barcodes of the variation.</li><li>'barcodes.barcode' = Includes barcodes. The barcode data to the related barcode ID.</li><li>'base' = The variation base.</li><li>'base.item' = Includes base. The item data of the variation.</li><li>'base.itemSerialNumber' = Includes base. The item serial numbers of the variation.</li><li>'base.feedback' = Includes base. The feedback of the variation.</li><li>'base.characteristics' = Includes base. The characteristics of the variation.</li><li>'base.crossSelling' = Includes base. The cross selling items of the variation.</li><li>'base.texts' = Includes base. The texts of the variation.</li><li>'base.availability' = Includes base. The availability data related to the variation's availability ID.</li><li>'base.images' = Includes base. The images linked to the item.</li><li>'base.shippingProfiles' = Includes base. The shipping profiles linked to the item.</li><li>'base.stock' = Includes base. The stock of the variation.</li><li>'base.stockStorageLocations' = Includes base. The stock storage locations of the variation.</li><li>'bundleComponents' = The bundle components of the variation.</li><li>'categories' = The categories of the variation.</li><li>'categories.category' = Includes categories. The related category data for each category ID.</li><li>'categories.categoryBranch' = Includes categories. The related category branch data for each category ID.</li><li>'clients' = The clients of the variation.</li><li>'defaultCategories' = The default categories of the variation</li><li>'defaultCategories.category' = Includes defaultCategories. The category data to the related category ID.</li><li>'images' = The images of the variation</li><li>'images.image' = Includes images. The image data to the related image ID.</li><li>'markets' = The markets of the variation.</li><li>'marketIdentNumbers' = The market ident numbers of the variation</li><li>'salesPrices' = The sales prices of the variation.</li><li>'salesPrices.salesPrice' = Includes salesPrices. The sales price data to the related sales price ID.</li><li>'skus' = The skus of the variation.</li><li>'supplier' = The supplier of the variation.</li><li>'supplier.supplier' = Includes supplier. The contact data to the related supplier ID.</li><li>'timestamps' = The timetamps of the variation.</li><li>'warehouses' = The warehouses of the variation</li><li>'warehouses.warehouse' = Includes warehouses. The warehouse data to the related warehouse ID.</li><li>'unit' = The unit of the variation</li><li>'unit.unit' = Includes unit. The unit data of the related unit ID.</li><li>'tags' = The tags of the variation.</li><li>'tags.tag' = Includes tags. The tag data to the related tag ID.</li><li>'properties' = The properties of the variation.</li><li>'properties.property' = Includes properties. The property data to the related property ID.</li><li>'comments' = The comments of the variation.</li><li>'inheritance' = The inheritance of the variation.</li></ul>
	 * @param string $sortBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'id'</li><li>'itemId'</li><li>'isMain'</li><li>'position'</li><li>'availabilityId'</li><li>'createdAt'</li><li>'updatedAt'</li><li>'itemUpdatedAt'</li><li>'relatedUpdatedAt'</li></ul>
	 * @param string $groupBy Groups the result. The following parameters are available:<ul><li>'itemId' = Groups the result by the item ID.</li><li>'itemAttributeValue' = Groups the result by the attribute with the flag 'isGroupable'.</li></ul>
	 * @param string $query Filter restricts the list of results to variations matching the specified query
	 * @param string $ids Filter restricts the list of results to variations with the specified IDs. More than one parameter should be separated by commas. If you use this filter no other filter will be considered. Limited to 500 ids
	 * @param int $itemId Filter restricts the list of results to variations with the specified item ID. Limited to 100 ids
	 * @param string $itemIds Filter restricts the list of results to variations with the specified item IDs. More than one parameter should be separated by commas.
	 * @param bool $isActive Filter restricts the list of results to variations which are active/inactive.
	 * @param bool $isMain Filter restricts the list of results to variations which are main/not main.
	 * @param bool $isSalable Filter restricts the list of results to variations which are salable.
	 * @param int $supplierId Filter restricts the list of results to variations which have the given supplier ID.
	 * @param string $availabilityIds Filter restricts the list of results to variations with the specified availability IDs. More than one parameter should be separated by commas.
	 * @param bool $hasChildren Filter restricts the list of results to variations which have children.
	 * @param bool $hasActiveChildren Filter restricts the list of results to variations which have active children.
	 * @param int $attributeId Filter restricts the list of results to variations which have the specified attribute ID.
	 * @param string $anyAttributeId Filter restricts the list of results to variations which have any of the specified attribute IDs. More than one parameter should be separated by commas.
	 * @param string $allAttributeIds Filter restricts the list of results to variations which have all specified attribute IDs. More than one parameter should be separated by commas.
	 * @param int $attributeValueId Filter restricts the list of results to variations which have the specified attribute value ID.
	 * @param string $anyAttributeValueId Filter restricts the list of results to variations which have the any of the specified attribute value IDs. More than one parameter should be separated by commas.
	 * @param string $allAttributeValueIds Filter restricts the list of results to variations which have all specified attribute value IDs. More than one parameter should be separated by commas.
	 * @param string $barcodeCode Filter restricts the list of results to variations which have a barcode with the specified code.
	 * @param int $barcodeId Filter restricts the list of results to variations which have a barcode with the specified ID.
	 * @param string $bundleType Filter restricts the list of results to variations with the specified bundle type.
	 * @param int $categoryId Filter restricts the list of results to variations which have the specified category ID.
	 * @param string $anyCategoryId Filter restricts the list of results to variations which have any of the specified category IDs. More than one parameter should be separated by commas.
	 * @param string $allCategoryIds Filter restricts the list of results to variations which have all specified category IDs. More than one parameter should be separated by commas.
	 * @param string $anyCharacteristicId Filter restricts the list of results to variations which have any of the specified characteristic IDs.
	 * @param string $allCharacteristicIds Filter restricts the list of results to variations which have all specified characteristic IDs.
	 * @param int $clientId Filter restricts the list of results to variations which have the specified client ID.
	 * @param string $anyClientId Filter restricts the list of results to variations which have any of the specified client IDs. More than one parameter should be separated by commas.
	 * @param string $allClientIds Filter restricts the list of results to variations which have all specified client IDs. More than one parameter should be separated by commas.
	 * @param string $automaticClientVisibilities Filter restricts the list of results to variations which have any of the specified automatic client visibilities. More than one parameter should be separated by commas.
	 * @param float|int $imageHasMarketId Filter restricts the list of results to variations which have an image available for the specified market ID.
	 * @param int $flag1 Filter restricts the list of results to variations with the specified flag one.
	 * @param int $flag2 Filter restricts the list of results to variations with the specified flag two.
	 * @param int $manufacturerId Filter restricts the list of results to variations with the specified manufacturer ID.
	 * @param string $anyManufacturerId Filter restricts the list of results to variations with any of the specified manufacturer IDs.
	 * @param string $itemType Filter restricts the list of results to variations which have the specified item type.
	 * @param float|int $marketId Filter restricts the list of results to variations which have the specified market ID.
	 * @param string $anyMarketId Filter restricts the list of results to variations which have any of the specified market IDs.
	 * @param string $referrerIds Filter restricts the list of results to variations which have/not have any of the specified market IDs.
	 * @param string $allMarketIds Filter restricts the list of results to variations which have all specified market IDs.
	 * @param string $priceBetween Filter restricts the list of results to variations which have a sales price between the specified minimum and maximum value. Minimum and maximum value should be separated by a comma.
	 * @param string $priceBetweenById Filter restricts the list of results to variations where the specified sales price is between the specified minimum and maximum value. Sales price ID, Minimum and maximum value should be separated by a comma.
	 * @param string $priceCalculationUuid Filter restricts the list of results to variations with the specified price calculiation uuid.
	 * @param string $salesPriceIds Filter restricts the list of results to variations which match specified sales price IDs criteria. More than one parameter should be separated by commas.
	 * @param string $anySalesPriceId Filter restricts the list of results to variations which have any of the specified sales price IDs. More than one parameter should be separated by commas.
	 * @param int $propertySelectionId Filter restricts the list of results to variations which have the specified property selection ID.
	 * @param string $anyPropertySelectionId Filter restricts the list of results to variations which have any of the specified property selection IDs.
	 * @param string $allPropertySelectionIds Filter restricts the list of results to variations which have all specified property selection IDs.
	 * @param string $hasNameInLanguage Filter restricts the list of results to variations which have a name in the specified language.
	 * @param int $bundleComponentVariationId Filter restricts the list of results to variations which have the specified bundle component variation ID.
	 * @param string $warehouseIds Filter restricts the result to variations which meet the specified warehouse id criteria. Allowed operators are: 'eq', 'not', 'nin' and 'in'.
	 * @param int $netStock Filter restricts the result to variations which meet the specified net stock criteria. Allowed operators are: 'eq', 'lt', 'lte', 'gt' and 'gte'.
	 * @param int $physicalStock Filter restricts the result to variations which meet the specified physical stock criteria. Allowed operators are: 'eq', 'lt', 'lte', 'gt' and 'gte'.
	 * @param string $itemNames Filter restricts the list of results to variations matching any name of the item.
	 * @param string $itemName1 Filter restricts the list of results to variations matching name 1 of the item
	 * @param string $itemName2 Filter restricts the list of results to variations matching name 2 of the item.
	 * @param string $itemName3 Filter restricts the list of results to variations matching name 3 of the item.
	 * @param string $number Filter restricts the list of results to variations which matching the number of the variation.
	 * @param string $model Filter restricts the list of results to variations which matching the model of the variation.
	 * @param string $supplierItemNumber Filter restricts the list of results to variations which matching the supplier item number of the variation.
	 * @param string $lang Specifies the language of the language-dependent filters
	 * @param string $createdAt Filter restricts the list of results to variations which have been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $updatedAt Filter restricts the list of results to variations which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $itemCreatedAt Filter restricts the list of results to variations whose item has been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $itemUpdatedAt Filter restricts the list of results to variations whose item has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $availabilityUpdatedAt Filter restricts the list of results to variations whose availablity has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $stockUpdatedAt Filter restricts the list of results to variations whose stock has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $barcodeUpdatedAt Filter restricts the list of results to variations whose barcodes has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $categoryUpdatedAt Filter restricts the list of results to variations whose categories has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $clientUpdatedAt Filter restricts the list of results to variations whose clients has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $marketUpdatedAt Filter restricts the list of results to variations whose markets has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $propertyUpdatedAt Filter restricts the list of results to variations whose properties has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $salesPriceUpdatedAt Filter restricts the list of results to variations whose sales prices have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $supplierUpdatedAt Filter restricts the list of results to variations whose suppliers has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $tagUpdatedAt Filter restricts the list of results to variations whose tags has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $warehouseUpdatedAt Filter restricts the list of results to variations whose warehouse has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $relatedUpdatedAt Filter restricts the list of results to variations whose relations (any) has been updated in the specified time frame. The from and to parameter should be separated by a coma. If there is no to value, The current time is used instead.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param bool $hasLowestPrice Filter restricts the list of results to variations which has or has not lowest price.
	 */
	public function listVariationsIncludingTheSpecifiedRelatedData(
		?string $with = null,
		?string $sortBy = null,
		?string $groupBy = null,
		?string $query = null,
		?string $ids = null,
		?int $itemId = null,
		?string $itemIds = null,
		?bool $isActive = null,
		?bool $isMain = null,
		?bool $isSalable = null,
		?int $supplierId = null,
		?string $availabilityIds = null,
		?bool $hasChildren = null,
		?bool $hasActiveChildren = null,
		?int $attributeId = null,
		?string $anyAttributeId = null,
		?string $allAttributeIds = null,
		?int $attributeValueId = null,
		?string $anyAttributeValueId = null,
		?string $allAttributeValueIds = null,
		?string $barcodeCode = null,
		?int $barcodeId = null,
		?string $bundleType = null,
		?int $categoryId = null,
		?string $anyCategoryId = null,
		?string $allCategoryIds = null,
		?string $anyCharacteristicId = null,
		?string $allCharacteristicIds = null,
		?int $clientId = null,
		?string $anyClientId = null,
		?string $allClientIds = null,
		?string $automaticClientVisibilities = null,
		float|int|null $imageHasMarketId = null,
		?int $flag1 = null,
		?int $flag2 = null,
		?int $manufacturerId = null,
		?string $anyManufacturerId = null,
		?string $itemType = null,
		float|int|null $marketId = null,
		?string $anyMarketId = null,
		?string $referrerIds = null,
		?string $allMarketIds = null,
		?string $priceBetween = null,
		?string $priceBetweenById = null,
		?string $priceCalculationUuid = null,
		?string $salesPriceIds = null,
		?string $anySalesPriceId = null,
		?int $propertySelectionId = null,
		?string $anyPropertySelectionId = null,
		?string $allPropertySelectionIds = null,
		?string $hasNameInLanguage = null,
		?int $bundleComponentVariationId = null,
		?string $warehouseIds = null,
		?int $netStock = null,
		?int $physicalStock = null,
		?string $itemNames = null,
		?string $itemName1 = null,
		?string $itemName2 = null,
		?string $itemName3 = null,
		?string $number = null,
		?string $model = null,
		?string $supplierItemNumber = null,
		?string $lang = null,
		?string $createdAt = null,
		?string $updatedAt = null,
		?string $itemCreatedAt = null,
		?string $itemUpdatedAt = null,
		?string $availabilityUpdatedAt = null,
		?string $stockUpdatedAt = null,
		?string $barcodeUpdatedAt = null,
		?string $categoryUpdatedAt = null,
		?string $clientUpdatedAt = null,
		?string $marketUpdatedAt = null,
		?string $propertyUpdatedAt = null,
		?string $salesPriceUpdatedAt = null,
		?string $supplierUpdatedAt = null,
		?string $tagUpdatedAt = null,
		?string $warehouseUpdatedAt = null,
		?string $relatedUpdatedAt = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?bool $hasLowestPrice = null,
	): Response
	{
		return $this->connector->send(new ListVariationsIncludingTheSpecifiedRelatedData($with, $sortBy, $groupBy, $query, $ids, $itemId, $itemIds, $isActive, $isMain, $isSalable, $supplierId, $availabilityIds, $hasChildren, $hasActiveChildren, $attributeId, $anyAttributeId, $allAttributeIds, $attributeValueId, $anyAttributeValueId, $allAttributeValueIds, $barcodeCode, $barcodeId, $bundleType, $categoryId, $anyCategoryId, $allCategoryIds, $anyCharacteristicId, $allCharacteristicIds, $clientId, $anyClientId, $allClientIds, $automaticClientVisibilities, $imageHasMarketId, $flag1, $flag2, $manufacturerId, $anyManufacturerId, $itemType, $marketId, $anyMarketId, $referrerIds, $allMarketIds, $priceBetween, $priceBetweenById, $priceCalculationUuid, $salesPriceIds, $anySalesPriceId, $propertySelectionId, $anyPropertySelectionId, $allPropertySelectionIds, $hasNameInLanguage, $bundleComponentVariationId, $warehouseIds, $netStock, $physicalStock, $itemNames, $itemName1, $itemName2, $itemName3, $number, $model, $supplierItemNumber, $lang, $createdAt, $updatedAt, $itemCreatedAt, $itemUpdatedAt, $availabilityUpdatedAt, $stockUpdatedAt, $barcodeUpdatedAt, $categoryUpdatedAt, $clientUpdatedAt, $marketUpdatedAt, $propertyUpdatedAt, $salesPriceUpdatedAt, $supplierUpdatedAt, $tagUpdatedAt, $warehouseUpdatedAt, $relatedUpdatedAt, $page, $itemsPerPage, $hasLowestPrice));
	}


	public function createListOfVariationsAndTheirRelatedData(): Response
	{
		return $this->connector->send(new CreateListOfVariationsAndTheirRelatedData());
	}


	public function deleteListOfVariations(): Response
	{
		return $this->connector->send(new DeleteListOfVariations());
	}


	public function createAndUpdateVariationAdditionalSkus(): Response
	{
		return $this->connector->send(new CreateAndUpdateVariationAdditionalSkus());
	}


	public function deleteListOfVariationAdditionalSkus(): Response
	{
		return $this->connector->send(new DeleteListOfVariationAdditionalSkus());
	}


	public function createAndUpdateListOfVariationBarcodes(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationBarcodes());
	}


	public function deleteVariationBarcodes(): Response
	{
		return $this->connector->send(new DeleteVariationBarcodes());
	}


	public function createAndUpdateListOfVariations(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariations());
	}


	public function createAndUpdateListOfVariationBundleComponents(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationBundleComponents());
	}


	public function deleteVariationBundleComponents(): Response
	{
		return $this->connector->send(new DeleteVariationBundleComponents());
	}


	public function createAndUpdateListOfVariationCategories(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationCategories());
	}


	public function deleteVariationCategories(): Response
	{
		return $this->connector->send(new DeleteVariationCategories());
	}


	public function createListOfVariationClients(): Response
	{
		return $this->connector->send(new CreateListOfVariationClients());
	}


	public function deleteListOfVariationClients(): Response
	{
		return $this->connector->send(new DeleteListOfVariationClients());
	}


	public function createAndUpdateListOfVariationComments(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationComments());
	}


	public function deleteVariationComments(): Response
	{
		return $this->connector->send(new DeleteVariationComments());
	}


	public function createAndUpdateListOfVariationDefaultCategories(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationDefaultCategories());
	}


	public function deleteVariationDefaultCategories(): Response
	{
		return $this->connector->send(new DeleteVariationDefaultCategories());
	}


	public function createListOfVariationImages(): Response
	{
		return $this->connector->send(new CreateListOfVariationImages());
	}


	public function deleteVariationImages(): Response
	{
		return $this->connector->send(new DeleteVariationImages());
	}


	public function createAndUpdateListOfVariationMarketIdentNumbers(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationMarketIdentNumbers());
	}


	public function deleteListOfVariationMarketIdentNumbers(): Response
	{
		return $this->connector->send(new DeleteListOfVariationMarketIdentNumbers());
	}


	public function createListOfVariationMarkets(): Response
	{
		return $this->connector->send(new CreateListOfVariationMarkets());
	}


	public function deleteListOfVariationMarkets(): Response
	{
		return $this->connector->send(new DeleteListOfVariationMarkets());
	}


	public function createAndUpdateListOfVariationProperties(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationProperties());
	}


	public function deleteListOfVariationProperties(): Response
	{
		return $this->connector->send(new DeleteListOfVariationProperties());
	}


	public function createAndUpdateListOfVariationSalesPrices(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationSalesPrices());
	}


	public function deleteListOfVariationSalesPrices(): Response
	{
		return $this->connector->send(new DeleteListOfVariationSalesPrices());
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'additionalSkus' = The additional skus of the variation.</li><li>'attributeValues' = The attribute values of the variation.</li><li>'attributeValues.attribute'/b> = Includes attributeValues. The attribute data to the related attribute ID.</li><li>'attributeValues.attributeValue' = Includes attributeValues. The attribute value data to the related attribute value ID.</li><li>'barcodes' = The barcodes of the variation.</li><li>'barcodes.barcode' = Includes barcodes. The barcode data to the related barcode ID.</li><li>'base' = The variation base.</li><li>'base.item' = Includes base. The item data of the variation.</li><li>'base.itemSerialNumber' = Includes base. The item serial numbers of the variation.</li><li>'base.feedback' = Includes base. The feedback of the variation.</li><li>'base.characteristics' = Includes base. The characteristics of the variation.</li><li>'base.crossSelling' = Includes base. The cross selling items of the variation.</li><li>'base.texts' = Includes base. The texts of the variation.</li><li>'base.availability' = Includes base. The availability data related to the variation's availability ID.</li><li>'base.images' = Includes base. The images linked to the item.</li><li>'base.shippingProfiles' = Includes base. The shipping profiles linked to the item.</li><li>'base.stock' = Includes base. The stock of the variation.</li><li>'base.stockStorageLocations' = Includes base. The stock storage locations of the variation.</li><li>'bundleComponents' = The bundle components of the variation.</li><li>'categories' = The categories of the variation.</li><li>'categories.category' = Includes categories. The related category data for each category ID.</li><li>'categories.categoryBranch' = Includes categories. The related category branch data for each category ID.</li><li>'clients' = The clients of the variation.</li><li>'defaultCategories' = The default categories of the variation</li><li>'defaultCategories.category' = Includes defaultCategories. The category data to the related category ID.</li><li>'images' = The images of the variation</li><li>'images.image' = Includes images. The image data to the related image ID.</li><li>'markets' = The markets of the variation.</li><li>'marketIdentNumbers' = The market ident numbers of the variation</li><li>'salesPrices' = The sales prices of the variation.</li><li>'salesPrices.salesPrice' = Includes salesPrices. The sales price data to the related sales price ID.</li><li>'skus' = The skus of the variation.</li><li>'supplier' = The supplier of the variation.</li><li>'supplier.supplier' = Includes supplier. The contact data to the related supplier ID.</li><li>'timestamps' = The timetamps of the variation.</li><li>'warehouses' = The warehouses of the variation</li><li>'warehouses.warehouse' = Includes warehouses. The warehouse data to the related warehouse ID.</li><li>'unit' = The unit of the variation</li><li>'unit.unit' = Includes unit. The unit data of the related unit ID.</li><li>'tags' = The tags of the variation.</li><li>'tags.tag' = Includes tags. The tag data to the related tag ID.</li><li>'properties' = The properties of the variation.</li><li>'properties.property' = Includes properties. The property data to the related property ID.</li><li>'comments' = The comments of the variation.</li><li>'inheritance' = The inheritance of the variation.</li></ul>
	 * @param string $groupBy Groups the result. The following parameters are available:<ul><li>'itemId' = Groups the result by the item ID.</li><li>'itemAttributeValue' = Groups the result by the attribute with the flag 'isGroupable'.</li></ul>
	 * @param string $query Filter restricts the list of results to variations matching the specified query
	 * @param int $itemId Filter restricts the list of results to variations with the specified item ID. Limited to 100 ids
	 * @param string $itemIds Filter restricts the list of results to variations with the specified item IDs. More than one parameter should be separated by commas.
	 * @param bool $isActive Filter restricts the list of results to variations which are active/inactive.
	 * @param bool $isMain Filter restricts the list of results to variations which are main/not main.
	 * @param bool $isSalable Filter restricts the list of results to variations which are salable.
	 * @param int $supplierId Filter restricts the list of results to variations which have the given supplier ID.
	 * @param string $availabilityIds Filter restricts the list of results to variations with the specified availability IDs. More than one parameter should be separated by commas.
	 * @param bool $hasChildren Filter restricts the list of results to variations which have children.
	 * @param bool $hasActiveChildren Filter restricts the list of results to variations which have active children.
	 * @param int $attributeId Filter restricts the list of results to variations which have the specified attribute ID.
	 * @param string $anyAttributeId Filter restricts the list of results to variations which have any of the specified attribute IDs. More than one parameter should be separated by commas.
	 * @param string $allAttributeIds Filter restricts the list of results to variations which have all specified attribute IDs. More than one parameter should be separated by commas.
	 * @param int $attributeValueId Filter restricts the list of results to variations which have the specified attribute value ID.
	 * @param string $anyAttributeValueId Filter restricts the list of results to variations which have the any of the specified attribute value IDs. More than one parameter should be separated by commas.
	 * @param string $allAttributeValueIds Filter restricts the list of results to variations which have all specified attribute value IDs. More than one parameter should be separated by commas.
	 * @param bool $hasBarcode Filter restricts the list of results to variations which have at least one barcode (true) or have no barcodes (false).
	 * @param string $barcodeCode Filter restricts the list of results to variations which have a barcode with the specified code.
	 * @param int $barcodeId Filter restricts the list of results to variations which have a barcode with the specified ID.
	 * @param string $bundleType Filter restricts the list of results to variations with the specified bundle type.
	 * @param int $categoryId Filter restricts the list of results to variations which have the specified category ID.
	 * @param string $anyCategoryId Filter restricts the list of results to variations which have any of the specified category IDs. More than one parameter should be separated by commas.
	 * @param string $allCategoryIds Filter restricts the list of results to variations which have all specified category IDs. More than one parameter should be separated by commas.
	 * @param string $anyCharacteristicId Filter restricts the list of results to variations which have any of the specified characteristic IDs.
	 * @param string $allCharacteristicIds Filter restricts the list of results to variations which have all specified characteristic IDs.
	 * @param int $clientId Filter restricts the list of results to variations which have the specified client ID.
	 * @param string $anyClientId Filter restricts the list of results to variations which have any of the specified client IDs. More than one parameter should be separated by commas.
	 * @param string $allClientIds Filter restricts the list of results to variations which have all specified client IDs. More than one parameter should be separated by commas.
	 * @param string $automaticClientVisibilities Filter restricts the list of results to variations which have any of the specified automatic client visibilities. More than one parameter should be separated by commas.
	 * @param float|int $imageHasMarketId Filter restricts the list of results to variations which have an image available for the specified market ID.
	 * @param int $flag1 Filter restricts the list of results to variations with the specified flag one.
	 * @param int $flag2 Filter restricts the list of results to variations with the specified flag two.
	 * @param int $manufacturerId Filter restricts the list of results to variations with the specified manufacturer ID.
	 * @param string $anyManufacturerId Filter restricts the list of results to variations with any of the specified manufacturer IDs.
	 * @param string $itemType Filter restricts the list of results to variations which have the specified item type.
	 * @param float|int $marketId Filter restricts the list of results to variations which have the specified market ID.
	 * @param string $anyMarketId Filter restricts the list of results to variations which have any of the specified market IDs.
	 * @param string $referrerIds Filter restricts the list of results to variations which have/not have any of the specified market IDs.
	 * @param string $allMarketIds Filter restricts the list of results to variations which have all specified market IDs.
	 * @param string $priceBetween Filter restricts the list of results to variations which have a sales price between the specified minimum and maximum value. Minimum and maximum value should be separated by a comma.
	 * @param string $priceBetweenById Filter restricts the list of results to variations where the specified sales price is between the specified minimum and maximum value. Sales price ID, Minimum and maximum value should be separated by a comma.
	 * @param string $priceCalculationUuid Filter restricts the list of results to variations with the specified price calculiation uuid.
	 * @param string $anySalesPriceId Filter restricts the list of results to variations which have any of the specified sales price IDs. More than one parameter should be separated by commas.
	 * @param int $propertySelectionId Filter restricts the list of results to variations which have the specified property selection ID.
	 * @param string $anyPropertySelectionId Filter restricts the list of results to variations which have any of the specified property selection IDs.
	 * @param string $allPropertySelectionIds Filter restricts the list of results to variations which have all specified property selection IDs.
	 * @param string $hasNameInLanguage Filter restricts the list of results to variations which have a name in the specified language.
	 * @param int $bundleComponentVariationId Filter restricts the list of results to variations which have the specified bundle component variation ID.
	 * @param string $itemNames Filter restricts the list of results to variations matching any name of the item.
	 * @param string $itemName1 Filter restricts the list of results to variations matching name 1 of the item
	 * @param string $itemName2 Filter restricts the list of results to variations matching name 2 of the item.
	 * @param string $itemName3 Filter restricts the list of results to variations matching name 3 of the item.
	 * @param string $number Filter restricts the list of results to variations which matching the number of the variation.
	 * @param string $model Filter restricts the list of results to variations which matching the model of the variation.
	 * @param string $supplierItemNumber Filter restricts the list of results to variations which matching the supplier item number of the variation.
	 * @param string $lang Specifies the language of the language-dependent filters
	 * @param string $createdAt Filter restricts the list of results to variations which have been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $updatedAt Filter restricts the list of results to variations which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $itemCreatedAt Filter restricts the list of results to variations whose item has been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $itemUpdatedAt Filter restricts the list of results to variations whose item has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $availabilityUpdatedAt Filter restricts the list of results to variations whose availablity has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $stockUpdatedAt Filter restricts the list of results to variations whose stock has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $barcodeUpdatedAt Filter restricts the list of results to variations whose barcodes has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $categoryUpdatedAt Filter restricts the list of results to variations whose categories has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $clientUpdatedAt Filter restricts the list of results to variations whose clients has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $marketUpdatedAt Filter restricts the list of results to variations whose markets has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $propertyUpdatedAt Filter restricts the list of results to variations whose properties has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $supplierUpdatedAt Filter restricts the list of results to variations whose suppliers has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $tagUpdatedAt Filter restricts the list of results to variations whose tags has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $warehouseUpdatedAt Filter restricts the list of results to variations whose warehouse has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param string $relatedUpdatedAt Filter restricts the list of results to variations whose relations (any) has been updated in the specified time frame. The from and to parameter should be separated by a coma. If there is no to value, The current time is used instead.
	 * @param bool $hasLowestPrice Filter restricts the list of results to variations which has or has not lowest price.
	 * @param string $cursor The cursor to get the next entries
	 */
	public function getAllVariationsScrolledByCursor(
		?string $with = null,
		?string $groupBy = null,
		?string $query = null,
		?int $itemId = null,
		?string $itemIds = null,
		?bool $isActive = null,
		?bool $isMain = null,
		?bool $isSalable = null,
		?int $supplierId = null,
		?string $availabilityIds = null,
		?bool $hasChildren = null,
		?bool $hasActiveChildren = null,
		?int $attributeId = null,
		?string $anyAttributeId = null,
		?string $allAttributeIds = null,
		?int $attributeValueId = null,
		?string $anyAttributeValueId = null,
		?string $allAttributeValueIds = null,
		?bool $hasBarcode = null,
		?string $barcodeCode = null,
		?int $barcodeId = null,
		?string $bundleType = null,
		?int $categoryId = null,
		?string $anyCategoryId = null,
		?string $allCategoryIds = null,
		?string $anyCharacteristicId = null,
		?string $allCharacteristicIds = null,
		?int $clientId = null,
		?string $anyClientId = null,
		?string $allClientIds = null,
		?string $automaticClientVisibilities = null,
		float|int|null $imageHasMarketId = null,
		?int $flag1 = null,
		?int $flag2 = null,
		?int $manufacturerId = null,
		?string $anyManufacturerId = null,
		?string $itemType = null,
		float|int|null $marketId = null,
		?string $anyMarketId = null,
		?string $referrerIds = null,
		?string $allMarketIds = null,
		?string $priceBetween = null,
		?string $priceBetweenById = null,
		?string $priceCalculationUuid = null,
		?string $anySalesPriceId = null,
		?int $propertySelectionId = null,
		?string $anyPropertySelectionId = null,
		?string $allPropertySelectionIds = null,
		?string $hasNameInLanguage = null,
		?int $bundleComponentVariationId = null,
		?string $itemNames = null,
		?string $itemName1 = null,
		?string $itemName2 = null,
		?string $itemName3 = null,
		?string $number = null,
		?string $model = null,
		?string $supplierItemNumber = null,
		?string $lang = null,
		?string $createdAt = null,
		?string $updatedAt = null,
		?string $itemCreatedAt = null,
		?string $itemUpdatedAt = null,
		?string $availabilityUpdatedAt = null,
		?string $stockUpdatedAt = null,
		?string $barcodeUpdatedAt = null,
		?string $categoryUpdatedAt = null,
		?string $clientUpdatedAt = null,
		?string $marketUpdatedAt = null,
		?string $propertyUpdatedAt = null,
		?string $supplierUpdatedAt = null,
		?string $tagUpdatedAt = null,
		?string $warehouseUpdatedAt = null,
		?string $relatedUpdatedAt = null,
		?bool $hasLowestPrice = null,
		?string $cursor = null,
	): Response
	{
		return $this->connector->send(new GetAllVariationsScrolledByCursor($with, $groupBy, $query, $itemId, $itemIds, $isActive, $isMain, $isSalable, $supplierId, $availabilityIds, $hasChildren, $hasActiveChildren, $attributeId, $anyAttributeId, $allAttributeIds, $attributeValueId, $anyAttributeValueId, $allAttributeValueIds, $hasBarcode, $barcodeCode, $barcodeId, $bundleType, $categoryId, $anyCategoryId, $allCategoryIds, $anyCharacteristicId, $allCharacteristicIds, $clientId, $anyClientId, $allClientIds, $automaticClientVisibilities, $imageHasMarketId, $flag1, $flag2, $manufacturerId, $anyManufacturerId, $itemType, $marketId, $anyMarketId, $referrerIds, $allMarketIds, $priceBetween, $priceBetweenById, $priceCalculationUuid, $anySalesPriceId, $propertySelectionId, $anyPropertySelectionId, $allPropertySelectionIds, $hasNameInLanguage, $bundleComponentVariationId, $itemNames, $itemName1, $itemName2, $itemName3, $number, $model, $supplierItemNumber, $lang, $createdAt, $updatedAt, $itemCreatedAt, $itemUpdatedAt, $availabilityUpdatedAt, $stockUpdatedAt, $barcodeUpdatedAt, $categoryUpdatedAt, $clientUpdatedAt, $marketUpdatedAt, $propertyUpdatedAt, $supplierUpdatedAt, $tagUpdatedAt, $warehouseUpdatedAt, $relatedUpdatedAt, $hasLowestPrice, $cursor));
	}


	public function createAndUpdateListOfVariationSkus(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationSkus());
	}


	public function deleteListOfVariationSkus(): Response
	{
		return $this->connector->send(new DeleteListOfVariationSkus());
	}


	public function createAndUpdateListOfVariationSuppliers(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationSuppliers());
	}


	public function deleteListOfVariationSupplier(): Response
	{
		return $this->connector->send(new DeleteListOfVariationSupplier());
	}


	public function createListOfVariationTags(): Response
	{
		return $this->connector->send(new CreateListOfVariationTags());
	}


	public function deleteListOfVariationTags(): Response
	{
		return $this->connector->send(new DeleteListOfVariationTags());
	}


	public function createAndUpdateListOfVariationWarehouses(): Response
	{
		return $this->connector->send(new CreateAndUpdateListOfVariationWarehouses());
	}


	public function deleteListOfVariationWarehouses(): Response
	{
		return $this->connector->send(new DeleteListOfVariationWarehouses());
	}
}
