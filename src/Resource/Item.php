<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Item\ActivateClientStore;
use PlentyOne\Api\Requests\Item\ActivateCountry;
use PlentyOne\Api\Requests\Item\ActivateCurrency;
use PlentyOne\Api\Requests\Item\ActivateCustomerClass;
use PlentyOne\Api\Requests\Item\ActivateReferrer;
use PlentyOne\Api\Requests\Item\ActivateReferrerAccount;
use PlentyOne\Api\Requests\Item\ActivateShippingProfile;
use PlentyOne\Api\Requests\Item\AddVariationToBundle;
use PlentyOne\Api\Requests\Item\BookIncomingStock;
use PlentyOne\Api\Requests\Item\BookOutgoingStock;
use PlentyOne\Api\Requests\Item\BulkActivateShippingProfiles;
use PlentyOne\Api\Requests\Item\BulkCreateCategoryLinks;
use PlentyOne\Api\Requests\Item\BulkCreatePrices;
use PlentyOne\Api\Requests\Item\BulkUpdateCategoryLinks;
use PlentyOne\Api\Requests\Item\BulkUpdateItems;
use PlentyOne\Api\Requests\Item\BulkUpdatePrices;
use PlentyOne\Api\Requests\Item\BulkUpdateProperties;
use PlentyOne\Api\Requests\Item\CopiesItem;
use PlentyOne\Api\Requests\Item\CorrectStock;
use PlentyOne\Api\Requests\Item\CreateAdditionalSku;
use PlentyOne\Api\Requests\Item\CreateAttribute;
use PlentyOne\Api\Requests\Item\CreateAttributeName;
use PlentyOne\Api\Requests\Item\CreateAttributeValue;
use PlentyOne\Api\Requests\Item\CreateAttributeValueImageLink;
use PlentyOne\Api\Requests\Item\CreateAttributeValueMarketName;
use PlentyOne\Api\Requests\Item\CreateAttributeValueName;
use PlentyOne\Api\Requests\Item\CreateAvailability;
use PlentyOne\Api\Requests\Item\CreateBarcode;
use PlentyOne\Api\Requests\Item\CreateCommission;
use PlentyOne\Api\Requests\Item\CreateCrossSellingLink;
use PlentyOne\Api\Requests\Item\CreateDefaultCategoryLink;
use PlentyOne\Api\Requests\Item\CreateImageLink;
use PlentyOne\Api\Requests\Item\CreateImageName;
use PlentyOne\Api\Requests\Item\CreateItemSetComponents;
use PlentyOne\Api\Requests\Item\CreateItemSets;
use PlentyOne\Api\Requests\Item\CreateLinkBetweenVariationAndMarket;
use PlentyOne\Api\Requests\Item\CreateLinkBetweenVariationAndPropertyValue;
use PlentyOne\Api\Requests\Item\CreateLinkBetweenVariationAndSalesPrice;
use PlentyOne\Api\Requests\Item\CreateLinkBetweenVariationAndSupplier;
use PlentyOne\Api\Requests\Item\CreateLinkBetweenVariationAndWarehouse;
use PlentyOne\Api\Requests\Item\CreateManufacturer;
use PlentyOne\Api\Requests\Item\CreateMarketIdentNumber;
use PlentyOne\Api\Requests\Item\CreateNewItems;
use PlentyOne\Api\Requests\Item\CreateProperty;
use PlentyOne\Api\Requests\Item\CreatePropertyGroup;
use PlentyOne\Api\Requests\Item\CreatePropertyGroupName;
use PlentyOne\Api\Requests\Item\CreatePropertyMarketReference;
use PlentyOne\Api\Requests\Item\CreatePropertyName;
use PlentyOne\Api\Requests\Item\CreatePropertySelection;
use PlentyOne\Api\Requests\Item\CreatePropertyValueTextByLanguage;
use PlentyOne\Api\Requests\Item\CreateSalesPrice;
use PlentyOne\Api\Requests\Item\CreateSalesPriceName;
use PlentyOne\Api\Requests\Item\CreateSku;
use PlentyOne\Api\Requests\Item\CreateTexts;
use PlentyOne\Api\Requests\Item\CreateUnit;
use PlentyOne\Api\Requests\Item\CreateUnitName;
use PlentyOne\Api\Requests\Item\CreateUpTo50LinksBetweenVariationsAndMarkets;
use PlentyOne\Api\Requests\Item\CreateVariation;
use PlentyOne\Api\Requests\Item\CreateVariationBarcode;
use PlentyOne\Api\Requests\Item\CreatesNewAttributeMap;
use PlentyOne\Api\Requests\Item\CreatesNewAttributeValueMap;
use PlentyOne\Api\Requests\Item\CreatesPropertySelectionLang;
use PlentyOne\Api\Requests\Item\DeactivateClientStore;
use PlentyOne\Api\Requests\Item\DeactivateCountry;
use PlentyOne\Api\Requests\Item\DeactivateCurrency;
use PlentyOne\Api\Requests\Item\DeactivateReferrer;
use PlentyOne\Api\Requests\Item\DeactivateReferrerAccount;
use PlentyOne\Api\Requests\Item\DeactivateShippingProfile;
use PlentyOne\Api\Requests\Item\DeactivateShippingProfilesOfItem;
use PlentyOne\Api\Requests\Item\DeactivatesReferrer;
use PlentyOne\Api\Requests\Item\DeleteAdditionalSku;
use PlentyOne\Api\Requests\Item\DeleteAllLinksBetweenVariationAndItsSalesPrices;
use PlentyOne\Api\Requests\Item\DeleteAllMarketLinksOfOneVariation;
use PlentyOne\Api\Requests\Item\DeleteAttribute;
use PlentyOne\Api\Requests\Item\DeleteAttributeName;
use PlentyOne\Api\Requests\Item\DeleteAttributeValue;
use PlentyOne\Api\Requests\Item\DeleteAttributeValueImageLink;
use PlentyOne\Api\Requests\Item\DeleteAttributeValueMarketName;
use PlentyOne\Api\Requests\Item\DeleteAttributeValueName;
use PlentyOne\Api\Requests\Item\DeleteAvailability;
use PlentyOne\Api\Requests\Item\DeleteBarcode;
use PlentyOne\Api\Requests\Item\DeleteCommission;
use PlentyOne\Api\Requests\Item\DeleteCrossSellingLink;
use PlentyOne\Api\Requests\Item\DeleteDefaultCategoryLink;
use PlentyOne\Api\Requests\Item\DeleteImage;
use PlentyOne\Api\Requests\Item\DeleteImageLink;
use PlentyOne\Api\Requests\Item\DeleteImageName;
use PlentyOne\Api\Requests\Item\DeleteItem;
use PlentyOne\Api\Requests\Item\DeleteItemSet;
use PlentyOne\Api\Requests\Item\DeleteItemSetComponent;
use PlentyOne\Api\Requests\Item\DeleteItemSetComponents;
use PlentyOne\Api\Requests\Item\DeleteItemSets;
use PlentyOne\Api\Requests\Item\DeleteLinkBetweenVariationAndMarket;
use PlentyOne\Api\Requests\Item\DeleteLinkBetweenVariationAndPropertyValue;
use PlentyOne\Api\Requests\Item\DeleteLinkBetweenVariationAndSalesPrice;
use PlentyOne\Api\Requests\Item\DeleteLinkBetweenVariationAndSupplier;
use PlentyOne\Api\Requests\Item\DeleteLinkBetweenWarehouseAndVariation;
use PlentyOne\Api\Requests\Item\DeleteManufacturer;
use PlentyOne\Api\Requests\Item\DeleteProperty;
use PlentyOne\Api\Requests\Item\DeletePropertyGroup;
use PlentyOne\Api\Requests\Item\DeletePropertyGroupName;
use PlentyOne\Api\Requests\Item\DeletePropertyMarketReference;
use PlentyOne\Api\Requests\Item\DeletePropertyName;
use PlentyOne\Api\Requests\Item\DeletePropertySelection;
use PlentyOne\Api\Requests\Item\DeletePropertySelectionLanguage;
use PlentyOne\Api\Requests\Item\DeletePropertyValueTextByLanguage;
use PlentyOne\Api\Requests\Item\DeleteSalesPrice;
use PlentyOne\Api\Requests\Item\DeleteSalesPriceName;
use PlentyOne\Api\Requests\Item\DeleteSku;
use PlentyOne\Api\Requests\Item\DeleteTexts;
use PlentyOne\Api\Requests\Item\DeleteUnit;
use PlentyOne\Api\Requests\Item\DeleteUnitName;
use PlentyOne\Api\Requests\Item\DeleteVariation;
use PlentyOne\Api\Requests\Item\DeleteVariationBarcode;
use PlentyOne\Api\Requests\Item\DeletesAllLinksBetweenVariationAndItsPropertyValues;
use PlentyOne\Api\Requests\Item\DeletesAttributeMap;
use PlentyOne\Api\Requests\Item\DeletesAttributeValueMap;
use PlentyOne\Api\Requests\Item\DeletesMarketIdentNumber;
use PlentyOne\Api\Requests\Item\FillItemToEs;
use PlentyOne\Api\Requests\Item\FillVariation;
use PlentyOne\Api\Requests\Item\GetAllSalesPriceRelations;
use PlentyOne\Api\Requests\Item\GetAttribute;
use PlentyOne\Api\Requests\Item\GetAttributeName;
use PlentyOne\Api\Requests\Item\GetAttributeValue;
use PlentyOne\Api\Requests\Item\GetAttributeValueImageLink;
use PlentyOne\Api\Requests\Item\GetAttributeValueName;
use PlentyOne\Api\Requests\Item\GetBarcode;
use PlentyOne\Api\Requests\Item\GetCommission;
use PlentyOne\Api\Requests\Item\GetImage;
use PlentyOne\Api\Requests\Item\GetImageName;
use PlentyOne\Api\Requests\Item\GetItemAvailability;
use PlentyOne\Api\Requests\Item\GetItemLabel;
use PlentyOne\Api\Requests\Item\GetItemSet;
use PlentyOne\Api\Requests\Item\GetItemSetComponent;
use PlentyOne\Api\Requests\Item\GetLinkBetweenCategoryAndVariation;
use PlentyOne\Api\Requests\Item\GetListOfItemListingShopCategories;
use PlentyOne\Api\Requests\Item\GetListWithUnitsOfMeasurements;
use PlentyOne\Api\Requests\Item\GetManufacturer;
use PlentyOne\Api\Requests\Item\GetMarketIdentNumber;
use PlentyOne\Api\Requests\Item\GetNameAndLanguageForAttributeValueId;
use PlentyOne\Api\Requests\Item\GetOneItemListingCategories;
use PlentyOne\Api\Requests\Item\GetProperty;
use PlentyOne\Api\Requests\Item\GetPropertyGroup;
use PlentyOne\Api\Requests\Item\GetPropertyGroupNameInLanguage;
use PlentyOne\Api\Requests\Item\GetPropertyMarketReference;
use PlentyOne\Api\Requests\Item\GetPropertyName;
use PlentyOne\Api\Requests\Item\GetPropertySelection;
use PlentyOne\Api\Requests\Item\GetPropertyValue;
use PlentyOne\Api\Requests\Item\GetPropertyValueTextByLanguage;
use PlentyOne\Api\Requests\Item\GetPropertyValueTexts;
use PlentyOne\Api\Requests\Item\GetSalesPrice;
use PlentyOne\Api\Requests\Item\GetSalesPriceDataForVariation;
use PlentyOne\Api\Requests\Item\GetSku;
use PlentyOne\Api\Requests\Item\GetSupplierDataForVariation;
use PlentyOne\Api\Requests\Item\GetTexts;
use PlentyOne\Api\Requests\Item\GetTheItemSetConfigurationOfItemSet;
use PlentyOne\Api\Requests\Item\GetTheItemVariationPackingUnitForSpecificGivenId;
use PlentyOne\Api\Requests\Item\GetTheItemVariationPackingUnits;
use PlentyOne\Api\Requests\Item\GetUnit;
use PlentyOne\Api\Requests\Item\GetUnitName;
use PlentyOne\Api\Requests\Item\GetVariation;
use PlentyOne\Api\Requests\Item\GetVariationBarcode;
use PlentyOne\Api\Requests\Item\GetVariationBundle;
use PlentyOne\Api\Requests\Item\GetVariationLabel;
use PlentyOne\Api\Requests\Item\GetWarehouseDataForVariation;
use PlentyOne\Api\Requests\Item\GetsAdditionalSku;
use PlentyOne\Api\Requests\Item\GetsAttributeMap;
use PlentyOne\Api\Requests\Item\GetsAttributeValueMap;
use PlentyOne\Api\Requests\Item\GetsDefaultCategoryLink;
use PlentyOne\Api\Requests\Item\GetsSalesPriceName;
use PlentyOne\Api\Requests\Item\LinkCategoryToVariation;
use PlentyOne\Api\Requests\Item\LinkClientToVariation;
use PlentyOne\Api\Requests\Item\ListActivatedClientsStores;
use PlentyOne\Api\Requests\Item\ListActivatedCurrencies;
use PlentyOne\Api\Requests\Item\ListActivatedCustomerClasses;
use PlentyOne\Api\Requests\Item\ListActivatedReferrers;
use PlentyOne\Api\Requests\Item\ListAdditionalSkus;
use PlentyOne\Api\Requests\Item\ListAllLinksBetweenVariationsAndMarkets;
use PlentyOne\Api\Requests\Item\ListAllShippingProfilesOfAllItems;
use PlentyOne\Api\Requests\Item\ListAttributeNames;
use PlentyOne\Api\Requests\Item\ListAttributeValueImageLink;
use PlentyOne\Api\Requests\Item\ListAttributeValues;
use PlentyOne\Api\Requests\Item\ListAttributes;
use PlentyOne\Api\Requests\Item\ListAvailabilities;
use PlentyOne\Api\Requests\Item\ListBarcodes;
use PlentyOne\Api\Requests\Item\ListBarcodesByReferrer;
use PlentyOne\Api\Requests\Item\ListBarcodesByType;
use PlentyOne\Api\Requests\Item\ListBundleComponents;
use PlentyOne\Api\Requests\Item\ListBundles;
use PlentyOne\Api\Requests\Item\ListCategoriesLinkedToVariation;
use PlentyOne\Api\Requests\Item\ListClientsLinkedToVariation;
use PlentyOne\Api\Requests\Item\ListCommissions;
use PlentyOne\Api\Requests\Item\ListCountriesBySalesPrice;
use PlentyOne\Api\Requests\Item\ListCrossSellingLinks;
use PlentyOne\Api\Requests\Item\ListDefaultCategoryLinks;
use PlentyOne\Api\Requests\Item\ListIdentNumberOfVariation;
use PlentyOne\Api\Requests\Item\ListImageLinksOfImage;
use PlentyOne\Api\Requests\Item\ListImageLinksOfItem;
use PlentyOne\Api\Requests\Item\ListImageLinksOfVariation;
use PlentyOne\Api\Requests\Item\ListImagesOfItem;
use PlentyOne\Api\Requests\Item\ListImagesOfVariation;
use PlentyOne\Api\Requests\Item\ListItemAvailabilities;
use PlentyOne\Api\Requests\Item\ListItemLabelTemplates;
use PlentyOne\Api\Requests\Item\ListItemSetComponentsOfItemSet;
use PlentyOne\Api\Requests\Item\ListItemSets;
use PlentyOne\Api\Requests\Item\ListManufacturers;
use PlentyOne\Api\Requests\Item\ListMarketsLinkedToVariation;
use PlentyOne\Api\Requests\Item\ListNamesOfImage;
use PlentyOne\Api\Requests\Item\ListNamesOfSalesPrice;
use PlentyOne\Api\Requests\Item\ListProperties;
use PlentyOne\Api\Requests\Item\ListPropertyGroups;
use PlentyOne\Api\Requests\Item\ListPropertyMarketReferences;
use PlentyOne\Api\Requests\Item\ListPropertySelections;
use PlentyOne\Api\Requests\Item\ListPropertySelectionsByLanguage;
use PlentyOne\Api\Requests\Item\ListPropertyValuesLinkedToVariation;
use PlentyOne\Api\Requests\Item\ListReferrerAccounts;
use PlentyOne\Api\Requests\Item\ListSalesPrices;
use PlentyOne\Api\Requests\Item\ListSalesPricesOfVariation;
use PlentyOne\Api\Requests\Item\ListShippingProfilesOfItem;
use PlentyOne\Api\Requests\Item\ListSkus;
use PlentyOne\Api\Requests\Item\ListStockMovements;
use PlentyOne\Api\Requests\Item\ListStockOfVariationPerStorageLocations;
use PlentyOne\Api\Requests\Item\ListStockOfVariationPerWarehouse;
use PlentyOne\Api\Requests\Item\ListTexts;
use PlentyOne\Api\Requests\Item\ListThePropertyGroupNamesOfPropertyGroup;
use PlentyOne\Api\Requests\Item\ListThePropertyNames;
use PlentyOne\Api\Requests\Item\ListTheWarehousesLinkedToVariation;
use PlentyOne\Api\Requests\Item\ListUnitNames;
use PlentyOne\Api\Requests\Item\ListUnits;
use PlentyOne\Api\Requests\Item\ListVariationBarcodes;
use PlentyOne\Api\Requests\Item\ListVariationsOfItem;
use PlentyOne\Api\Requests\Item\ListsAllAttributeMaps;
use PlentyOne\Api\Requests\Item\ListsAllAttributeValueMaps;
use PlentyOne\Api\Requests\Item\ListsSuppliersForVariation;
use PlentyOne\Api\Requests\Item\RedistributeStock;
use PlentyOne\Api\Requests\Item\RemoveBundleComponent;
use PlentyOne\Api\Requests\Item\RemoveCategoryFromVariation;
use PlentyOne\Api\Requests\Item\SearchAttributeValueMarketNames;
use PlentyOne\Api\Requests\Item\SearchForItemListingCategories;
use PlentyOne\Api\Requests\Item\SearchItem;
use PlentyOne\Api\Requests\Item\SearchVariations;
use PlentyOne\Api\Requests\Item\ShowItem;
use PlentyOne\Api\Requests\Item\TriggerSalesPriceCalculationForItemSet;
use PlentyOne\Api\Requests\Item\UnlinkClientFromVariation;
use PlentyOne\Api\Requests\Item\UpdateAdditionalSku;
use PlentyOne\Api\Requests\Item\UpdateAttribute;
use PlentyOne\Api\Requests\Item\UpdateAttributeName;
use PlentyOne\Api\Requests\Item\UpdateAttributeValue;
use PlentyOne\Api\Requests\Item\UpdateAttributeValueImageLink;
use PlentyOne\Api\Requests\Item\UpdateAttributeValueMarketName;
use PlentyOne\Api\Requests\Item\UpdateAttributeValueName;
use PlentyOne\Api\Requests\Item\UpdateBarcode;
use PlentyOne\Api\Requests\Item\UpdateCommission;
use PlentyOne\Api\Requests\Item\UpdateCrossSellingLink;
use PlentyOne\Api\Requests\Item\UpdateImage;
use PlentyOne\Api\Requests\Item\UpdateImageName;
use PlentyOne\Api\Requests\Item\UpdateItem;
use PlentyOne\Api\Requests\Item\UpdateItemAvailability;
use PlentyOne\Api\Requests\Item\UpdateItemSet;
use PlentyOne\Api\Requests\Item\UpdateItemSetComponent;
use PlentyOne\Api\Requests\Item\UpdateItemSetComponents;
use PlentyOne\Api\Requests\Item\UpdateItemSetConfiguration;
use PlentyOne\Api\Requests\Item\UpdateItemSets;
use PlentyOne\Api\Requests\Item\UpdateManufacturer;
use PlentyOne\Api\Requests\Item\UpdateProperty;
use PlentyOne\Api\Requests\Item\UpdatePropertyGroup;
use PlentyOne\Api\Requests\Item\UpdatePropertyGroupName;
use PlentyOne\Api\Requests\Item\UpdatePropertyMarketReference;
use PlentyOne\Api\Requests\Item\UpdatePropertyName;
use PlentyOne\Api\Requests\Item\UpdatePropertySelection;
use PlentyOne\Api\Requests\Item\UpdatePropertyValue;
use PlentyOne\Api\Requests\Item\UpdatePropertyValueTextByLanguage;
use PlentyOne\Api\Requests\Item\UpdateSalesPrice;
use PlentyOne\Api\Requests\Item\UpdateSalesPriceData;
use PlentyOne\Api\Requests\Item\UpdateSalesPriceName;
use PlentyOne\Api\Requests\Item\UpdateSku;
use PlentyOne\Api\Requests\Item\UpdateTexts;
use PlentyOne\Api\Requests\Item\UpdateUnit;
use PlentyOne\Api\Requests\Item\UpdateUnitName;
use PlentyOne\Api\Requests\Item\UpdateUpTo50Variations;
use PlentyOne\Api\Requests\Item\UpdateVariation;
use PlentyOne\Api\Requests\Item\UpdateVariationBarcode;
use PlentyOne\Api\Requests\Item\UpdateVariationBundle;
use PlentyOne\Api\Requests\Item\UpdateVariationCategoryLink;
use PlentyOne\Api\Requests\Item\UpdateWarehouseDataOfVariation;
use PlentyOne\Api\Requests\Item\UpdatesAttributeMap;
use PlentyOne\Api\Requests\Item\UpdatesAttributeValueMap;
use PlentyOne\Api\Requests\Item\UpdatesMarketIdentNumber;
use PlentyOne\Api\Requests\Item\UpdatesSupplierDataForVariation;
use PlentyOne\Api\Requests\Item\UploadNewImage;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Item extends BaseResource
{
	public function listItemAvailabilities(): Response
	{
		return $this->connector->send(new ListItemAvailabilities());
	}


	/**
	 * @param int $id
	 */
	public function getItemAvailability(int $id): Response
	{
		return $this->connector->send(new GetItemAvailability($id));
	}


	/**
	 * @param int $id
	 */
	public function updateItemAvailability(int $id): Response
	{
		return $this->connector->send(new UpdateItemAvailability($id));
	}


	public function listItemSets(): Response
	{
		return $this->connector->send(new ListItemSets());
	}


	public function updateItemSets(): Response
	{
		return $this->connector->send(new UpdateItemSets());
	}


	/**
	 * @param array $params includes the item sets that have to be created
	 */
	public function createItemSets(?array $params = null): Response
	{
		return $this->connector->send(new CreateItemSets($params));
	}


	public function deleteItemSets(): Response
	{
		return $this->connector->send(new DeleteItemSets());
	}


	/**
	 * @param int $id
	 */
	public function getItemSet(int $id): Response
	{
		return $this->connector->send(new GetItemSet($id));
	}


	/**
	 * @param int $id
	 */
	public function updateItemSet(int $id): Response
	{
		return $this->connector->send(new UpdateItemSet($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteItemSet(int $id): Response
	{
		return $this->connector->send(new DeleteItemSet($id));
	}


	/**
	 * @param int $setId
	 */
	public function listItemSetComponentsOfItemSet(int $setId): Response
	{
		return $this->connector->send(new ListItemSetComponentsOfItemSet($setId));
	}


	/**
	 * @param int $setId
	 */
	public function updateItemSetComponents(int $setId): Response
	{
		return $this->connector->send(new UpdateItemSetComponents($setId));
	}


	/**
	 * @param int $setId
	 */
	public function createItemSetComponents(int $setId): Response
	{
		return $this->connector->send(new CreateItemSetComponents($setId));
	}


	/**
	 * @param int $setId
	 */
	public function deleteItemSetComponents(int $setId): Response
	{
		return $this->connector->send(new DeleteItemSetComponents($setId));
	}


	/**
	 * @param int $setId
	 * @param int $id
	 */
	public function getItemSetComponent(int $setId, int $id): Response
	{
		return $this->connector->send(new GetItemSetComponent($setId, $id));
	}


	/**
	 * @param int $setId
	 * @param int $id
	 */
	public function updateItemSetComponent(int $setId, int $id): Response
	{
		return $this->connector->send(new UpdateItemSetComponent($setId, $id));
	}


	/**
	 * @param int $setId
	 * @param int $id
	 */
	public function deleteItemSetComponent(int $setId, int $id): Response
	{
		return $this->connector->send(new DeleteItemSetComponent($setId, $id));
	}


	/**
	 * @param int $setId
	 */
	public function getTheItemSetConfigurationOfItemSet(int $setId): Response
	{
		return $this->connector->send(new GetTheItemSetConfigurationOfItemSet($setId));
	}


	/**
	 * @param int $setId
	 */
	public function updateItemSetConfiguration(int $setId): Response
	{
		return $this->connector->send(new UpdateItemSetConfiguration($setId));
	}


	/**
	 * @param int $setId
	 */
	public function triggerSalesPriceCalculationForItemSet(int $setId): Response
	{
		return $this->connector->send(new TriggerSalesPriceCalculationForItemSet($setId));
	}


	/**
	 * @param string $with Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 * @param int $page Limits the results to a specific page. The page number must be specified.
	 * @param int $itemsPerPage Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
	 * @param string $name Filter restricts the list of results to items with the specified item name. An item name must be specified.
	 * @param string $manufacturerId Filter restricts the list of results to items with the specified manufacturerId.
	 * @param int $id Filter restricts the list of results to items with the specified ID. More than one ID should be separated by commas.
	 * @param int $flagOne Filter restricts the list of results to items with the specified flagOne.
	 * @param int $flagTwo Filter restricts the list of results to items with the specified flagTwo.
	 * @param string $updatedBetween Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param string $variationUpdatedBetween Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param string $variationRelatedUpdatedBetween Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
	 * @param string $or Filters can be defined in this param to link them via OR instead of AND. The syntax looks like the following: or=(updatedBetween=1573050718&varitionUpdatedBetween=1573050718). Everything in the brackets is written in the normal URL-Syntax. The or-param can be used multiple times if it is used like this: or[]=(...)&or[]=(...)
	 */
	public function searchItem(
		?string $with = null,
		?string $lang = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $name = null,
		?string $manufacturerId = null,
		?int $id = null,
		?int $flagOne = null,
		?int $flagTwo = null,
		?string $updatedBetween = null,
		?string $variationUpdatedBetween = null,
		?string $variationRelatedUpdatedBetween = null,
		?string $or = null,
	): Response
	{
		return $this->connector->send(new SearchItem($with, $lang, $page, $itemsPerPage, $name, $manufacturerId, $id, $flagOne, $flagTwo, $updatedBetween, $variationUpdatedBetween, $variationRelatedUpdatedBetween, $or));
	}


	public function bulkUpdateItems(): Response
	{
		return $this->connector->send(new BulkUpdateItems());
	}


	public function createNewItems(): Response
	{
		return $this->connector->send(new CreateNewItems());
	}


	/**
	 * @param int $valueId
	 */
	public function getNameAndLanguageForAttributeValueId(int $valueId): Response
	{
		return $this->connector->send(new GetNameAndLanguageForAttributeValueId($valueId));
	}


	/**
	 * @param int $valueId
	 */
	public function createAttributeValueName(int $valueId): Response
	{
		return $this->connector->send(new CreateAttributeValueName($valueId));
	}


	/**
	 * @param int $valueId The ID of the attribute value.
	 * @param string $lang The language of the attribute value.
	 */
	public function getAttributeValueName(int $valueId, string $lang): Response
	{
		return $this->connector->send(new GetAttributeValueName($valueId, $lang));
	}


	/**
	 * @param int $valueId
	 * @param int $lang
	 */
	public function updateAttributeValueName(int $valueId, int $lang): Response
	{
		return $this->connector->send(new UpdateAttributeValueName($valueId, $lang));
	}


	/**
	 * @param int $valueId
	 * @param int $lang
	 */
	public function deleteAttributeValueName(int $valueId, int $lang): Response
	{
		return $this->connector->send(new DeleteAttributeValueName($valueId, $lang));
	}


	/**
	 * @param string $with Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listAttributes(?string $with = null, ?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListAttributes($with, $updatedAt));
	}


	public function createAttribute(): Response
	{
		return $this->connector->send(new CreateAttribute());
	}


	public function listsAllAttributeMaps(): Response
	{
		return $this->connector->send(new ListsAllAttributeMaps());
	}


	public function createsNewAttributeMap(): Response
	{
		return $this->connector->send(new CreatesNewAttributeMap());
	}


	public function listsAllAttributeValueMaps(): Response
	{
		return $this->connector->send(new ListsAllAttributeValueMaps());
	}


	public function createsNewAttributeValueMap(): Response
	{
		return $this->connector->send(new CreatesNewAttributeValueMap());
	}


	/**
	 * @param int $attributeId
	 * @param int $marketId
	 */
	public function getsAttributeMap(int $attributeId, int $marketId): Response
	{
		return $this->connector->send(new GetsAttributeMap($attributeId, $marketId));
	}


	/**
	 * @param int $attributeId
	 * @param int $marketId
	 */
	public function updatesAttributeMap(int $attributeId, int $marketId): Response
	{
		return $this->connector->send(new UpdatesAttributeMap($attributeId, $marketId));
	}


	/**
	 * @param int $attributeId
	 * @param int $marketId
	 */
	public function deletesAttributeMap(int $attributeId, int $marketId): Response
	{
		return $this->connector->send(new DeletesAttributeMap($attributeId, $marketId));
	}


	/**
	 * @param int $attributeId
	 */
	public function getAttributeName(int $attributeId): Response
	{
		return $this->connector->send(new GetAttributeName($attributeId));
	}


	/**
	 * @param int $attributeId
	 */
	public function createAttributeName(int $attributeId): Response
	{
		return $this->connector->send(new CreateAttributeName($attributeId));
	}


	/**
	 * @param int $attributeId The ID of the attribute.
	 * @param string $lang The language of the attribute.
	 */
	public function listAttributeNames(int $attributeId, string $lang): Response
	{
		return $this->connector->send(new ListAttributeNames($attributeId, $lang));
	}


	/**
	 * @param int $attributeId
	 * @param int $lang
	 */
	public function updateAttributeName(int $attributeId, int $lang): Response
	{
		return $this->connector->send(new UpdateAttributeName($attributeId, $lang));
	}


	/**
	 * @param int $attributeId
	 * @param int $lang
	 */
	public function deleteAttributeName(int $attributeId, int $lang): Response
	{
		return $this->connector->send(new DeleteAttributeName($attributeId, $lang));
	}


	/**
	 * @param int $attributeId
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function searchAttributeValueMarketNames(
		int $attributeId,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new SearchAttributeValueMarketNames($attributeId, $page, $itemsPerPage));
	}


	/**
	 * @param int $attributeId
	 */
	public function createAttributeValueMarketName(int $attributeId): Response
	{
		return $this->connector->send(new CreateAttributeValueMarketName($attributeId));
	}


	/**
	 * @param int $attributeId
	 * @param int $valueId
	 * @param int $lang
	 * @param int $referenceType
	 */
	public function updateAttributeValueMarketName(
		int $attributeId,
		int $valueId,
		int $lang,
		int $referenceType,
	): Response
	{
		return $this->connector->send(new UpdateAttributeValueMarketName($attributeId, $valueId, $lang, $referenceType));
	}


	/**
	 * @param int $attributeId
	 * @param int $valueId
	 * @param int $lang
	 * @param int $referenceType
	 */
	public function deleteAttributeValueMarketName(
		int $attributeId,
		int $valueId,
		int $lang,
		int $referenceType,
	): Response
	{
		return $this->connector->send(new DeleteAttributeValueMarketName($attributeId, $valueId, $lang, $referenceType));
	}


	/**
	 * @param int $attributeId
	 * @param string $with Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute value links (amazon excluded)</li></ul>
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listAttributeValues(int $attributeId, ?string $with = null, ?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListAttributeValues($attributeId, $with, $updatedAt));
	}


	/**
	 * @param int $attributeId
	 */
	public function createAttributeValue(int $attributeId): Response
	{
		return $this->connector->send(new CreateAttributeValue($attributeId));
	}


	/**
	 * @param int $attributeId
	 * @param int $attributeValueId
	 * @param int $marketId
	 */
	public function getsAttributeValueMap(int $attributeId, int $attributeValueId, int $marketId): Response
	{
		return $this->connector->send(new GetsAttributeValueMap($attributeId, $attributeValueId, $marketId));
	}


	/**
	 * @param int $attributeId
	 * @param int $attributeValueId
	 * @param int $marketId
	 */
	public function updatesAttributeValueMap(int $attributeId, int $attributeValueId, int $marketId): Response
	{
		return $this->connector->send(new UpdatesAttributeValueMap($attributeId, $attributeValueId, $marketId));
	}


	/**
	 * @param int $attributeId
	 * @param int $attributeValueId
	 * @param int $marketId
	 */
	public function deletesAttributeValueMap(int $attributeId, int $attributeValueId, int $marketId): Response
	{
		return $this->connector->send(new DeletesAttributeValueMap($attributeId, $attributeValueId, $marketId));
	}


	/**
	 * @param int $attributeId
	 * @param int $id
	 * @param string $with Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute links (amazon excluded)</li></ul>
	 */
	public function getAttributeValue(int $attributeId, int $id, ?string $with = null): Response
	{
		return $this->connector->send(new GetAttributeValue($attributeId, $id, $with));
	}


	/**
	 * @param int $attributeId
	 * @param int $id
	 */
	public function updateAttributeValue(int $attributeId, int $id): Response
	{
		return $this->connector->send(new UpdateAttributeValue($attributeId, $id));
	}


	/**
	 * @param int $attributeId
	 * @param int $id
	 */
	public function deleteAttributeValue(int $attributeId, int $id): Response
	{
		return $this->connector->send(new DeleteAttributeValue($attributeId, $id));
	}


	/**
	 * @param int $id
	 * @param string $with Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.
	 */
	public function getAttribute(int $id, ?string $with = null): Response
	{
		return $this->connector->send(new GetAttribute($id, $with));
	}


	/**
	 * @param int $id
	 */
	public function updateAttribute(int $id): Response
	{
		return $this->connector->send(new UpdateAttribute($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteAttribute(int $id): Response
	{
		return $this->connector->send(new DeleteAttribute($id));
	}


	/**
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listBarcodes(?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListBarcodes($updatedAt));
	}


	public function createBarcode(): Response
	{
		return $this->connector->send(new CreateBarcode());
	}


	/**
	 * @param int $referrerId
	 */
	public function listBarcodesByReferrer(int $referrerId): Response
	{
		return $this->connector->send(new ListBarcodesByReferrer($referrerId));
	}


	/**
	 * @param int $type
	 */
	public function listBarcodesByType(int $type): Response
	{
		return $this->connector->send(new ListBarcodesByType($type));
	}


	/**
	 * @param int $barcodeId
	 */
	public function getBarcode(int $barcodeId): Response
	{
		return $this->connector->send(new GetBarcode($barcodeId));
	}


	/**
	 * @param int $barcodeId
	 */
	public function updateBarcode(int $barcodeId): Response
	{
		return $this->connector->send(new UpdateBarcode($barcodeId));
	}


	/**
	 * @param int $barcodeId
	 */
	public function deleteBarcode(int $barcodeId): Response
	{
		return $this->connector->send(new DeleteBarcode($barcodeId));
	}


	/**
	 * @param int $barcodeId
	 */
	public function activateReferrer(int $barcodeId): Response
	{
		return $this->connector->send(new ActivateReferrer($barcodeId));
	}


	/**
	 * @param int $barcodeId
	 * @param int $referrerId
	 */
	public function deactivateReferrer(int $barcodeId, int $referrerId): Response
	{
		return $this->connector->send(new DeactivateReferrer($barcodeId, $referrerId));
	}


	public function listAllShippingProfilesOfAllItems(): Response
	{
		return $this->connector->send(new ListAllShippingProfilesOfAllItems());
	}


	public function bulkActivateShippingProfiles(): Response
	{
		return $this->connector->send(new BulkActivateShippingProfiles());
	}


	public function listItemLabelTemplates(): Response
	{
		return $this->connector->send(new ListItemLabelTemplates());
	}


	public function searchForItemListingCategories(): Response
	{
		return $this->connector->send(new SearchForItemListingCategories());
	}


	/**
	 * @param int $id
	 */
	public function getOneItemListingCategories(int $id): Response
	{
		return $this->connector->send(new GetOneItemListingCategories($id));
	}


	/**
	 * @param int $ebayAccountId
	 */
	public function getListOfItemListingShopCategories(int $ebayAccountId): Response
	{
		return $this->connector->send(new GetListOfItemListingShopCategories($ebayAccountId));
	}


	/**
	 * @param string $with Includes the specified manufacturer information in the results. The following parameters are available: commissions, externals
	 * @param string $updatedAt Filter restricts the list of results to records updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 * @param string $name Filter restricts the list of results to records with specified name.
	 */
	public function listManufacturers(?string $with = null, ?string $updatedAt = null, ?string $name = null): Response
	{
		return $this->connector->send(new ListManufacturers($with, $updatedAt, $name));
	}


	public function createManufacturer(): Response
	{
		return $this->connector->send(new CreateManufacturer());
	}


	/**
	 * @param int $id
	 */
	public function getManufacturer(int $id): Response
	{
		return $this->connector->send(new GetManufacturer($id));
	}


	/**
	 * @param int $id
	 */
	public function updateManufacturer(int $id): Response
	{
		return $this->connector->send(new UpdateManufacturer($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteManufacturer(int $id): Response
	{
		return $this->connector->send(new DeleteManufacturer($id));
	}


	/**
	 * @param int $id
	 */
	public function listCommissions(int $id): Response
	{
		return $this->connector->send(new ListCommissions($id));
	}


	/**
	 * @param int $id
	 */
	public function createCommission(int $id): Response
	{
		return $this->connector->send(new CreateCommission($id));
	}


	/**
	 * @param int $id
	 * @param int $manufacturerId
	 */
	public function getCommission(int $id, int $manufacturerId): Response
	{
		return $this->connector->send(new GetCommission($id, $manufacturerId));
	}


	/**
	 * @param int $id
	 * @param int $manufacturerId
	 */
	public function updateCommission(int $id, int $manufacturerId): Response
	{
		return $this->connector->send(new UpdateCommission($id, $manufacturerId));
	}


	/**
	 * @param int $id
	 * @param int $manufacturerId
	 */
	public function deleteCommission(int $id, int $manufacturerId): Response
	{
		return $this->connector->send(new DeleteCommission($id, $manufacturerId));
	}


	/**
	 * @param string $language The language to return the unit name for. If no language is provided, all the languages will be returned
	 */
	public function getTheItemVariationPackingUnits(?string $language = null): Response
	{
		return $this->connector->send(new GetTheItemVariationPackingUnits($language));
	}


	/**
	 * @param int $id The ID of the packing unit
	 * @param string $language The language to return the unit name for. If no language is provided, all the languages will be returned
	 * @param bool $isUnitId A flag to say if the ID provided is the unit ID or not. If true, the unit ID will be taken into account to get the result
	 */
	public function getTheItemVariationPackingUnitForSpecificGivenId(
		int $id,
		?string $language = null,
		?bool $isUnitId = null,
	): Response
	{
		return $this->connector->send(new GetTheItemVariationPackingUnitForSpecificGivenId($id, $language, $isUnitId));
	}


	/**
	 * @param string $with Includes the specified property information in the results. The following parameters are available: <ul><li>names</b> = The names of the property</li><li>group</b> = The property group assigned to the property</li><li>marketComponents</b> = Lists the markets where the property is available </li><li>selections</b> = Lists the selections of the property</li></ul> More than one parameter should be separated by commas.
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 * @param string $groupId Filter restricts the list of results to items linked to a specified property group
	 * @param string $ids Filter restricts the list of results to items with the specified id criteria. Allowed comparators are 'eq' and 'in'.
	 * @param int $page Limits the results to a specific page. The page number must be specified.
	 * @param int $itemsPerPage Limits the number of results listed per page to a specific number. The number of properties to be listed per page must be specified.
	 */
	public function listProperties(
		?string $with = null,
		?string $updatedAt = null,
		?string $groupId = null,
		?string $ids = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListProperties($with, $updatedAt, $groupId, $ids, $page, $itemsPerPage));
	}


	public function createProperty(): Response
	{
		return $this->connector->send(new CreateProperty());
	}


	/**
	 * @param int $id
	 */
	public function getProperty(int $id): Response
	{
		return $this->connector->send(new GetProperty($id));
	}


	/**
	 * @param int $id
	 */
	public function updateProperty(int $id): Response
	{
		return $this->connector->send(new UpdateProperty($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteProperty(int $id): Response
	{
		return $this->connector->send(new DeleteProperty($id));
	}


	/**
	 * @param int $id
	 */
	public function listPropertyMarketReferences(int $id): Response
	{
		return $this->connector->send(new ListPropertyMarketReferences($id));
	}


	/**
	 * @param int $id
	 */
	public function createPropertyMarketReference(int $id): Response
	{
		return $this->connector->send(new CreatePropertyMarketReference($id));
	}


	/**
	 * @param int $id
	 * @param int $marketId
	 */
	public function getPropertyMarketReference(int $id, int $marketId): Response
	{
		return $this->connector->send(new GetPropertyMarketReference($id, $marketId));
	}


	/**
	 * @param int $id
	 * @param int $marketId
	 */
	public function updatePropertyMarketReference(int $id, int $marketId): Response
	{
		return $this->connector->send(new UpdatePropertyMarketReference($id, $marketId));
	}


	/**
	 * @param int $id
	 * @param int $marketId
	 */
	public function deletePropertyMarketReference(int $id, int $marketId): Response
	{
		return $this->connector->send(new DeletePropertyMarketReference($id, $marketId));
	}


	/**
	 * @param int $id
	 */
	public function listThePropertyNames(int $id): Response
	{
		return $this->connector->send(new ListThePropertyNames($id));
	}


	/**
	 * @param int $id
	 */
	public function createPropertyName(int $id): Response
	{
		return $this->connector->send(new CreatePropertyName($id));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function getPropertyName(int $id, int $lang): Response
	{
		return $this->connector->send(new GetPropertyName($id, $lang));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function updatePropertyName(int $id, int $lang): Response
	{
		return $this->connector->send(new UpdatePropertyName($id, $lang));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function deletePropertyName(int $id, int $lang): Response
	{
		return $this->connector->send(new DeletePropertyName($id, $lang));
	}


	/**
	 * @param int $propertyId
	 */
	public function listPropertySelections(int $propertyId): Response
	{
		return $this->connector->send(new ListPropertySelections($propertyId));
	}


	/**
	 * @param int $propertyId
	 */
	public function createPropertySelection(int $propertyId): Response
	{
		return $this->connector->send(new CreatePropertySelection($propertyId));
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 */
	public function getPropertySelection(int $propertyId, int $id): Response
	{
		return $this->connector->send(new GetPropertySelection($propertyId, $id));
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 */
	public function createsPropertySelectionLang(int $propertyId, int $id): Response
	{
		return $this->connector->send(new CreatesPropertySelectionLang($propertyId, $id));
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 */
	public function deletePropertySelection(int $propertyId, int $id): Response
	{
		return $this->connector->send(new DeletePropertySelection($propertyId, $id));
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 * @param int $lang
	 */
	public function listPropertySelectionsByLanguage(int $propertyId, int $id, int $lang): Response
	{
		return $this->connector->send(new ListPropertySelectionsByLanguage($propertyId, $id, $lang));
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 * @param int $lang
	 */
	public function updatePropertySelection(int $propertyId, int $id, int $lang): Response
	{
		return $this->connector->send(new UpdatePropertySelection($propertyId, $id, $lang));
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 * @param int $lang
	 */
	public function deletePropertySelectionLanguage(int $propertyId, int $id, int $lang): Response
	{
		return $this->connector->send(new DeletePropertySelectionLanguage($propertyId, $id, $lang));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $propertyId
	 * @param int $lang
	 */
	public function listPropertySelectionsDuplicate1(int $propertyId, int $lang): Response
	{
		return $this->connector->send(new ListPropertySelections($propertyId, $lang));
	}


	/**
	 * @param string $with Includes the specified property group information in the results. The following parameters are available: <ul><li>names</b> = The names of the property group</li><li>properties</b> = The properties that are assigned to the property group</li></ul> More than one parameter should be separated by commas.
	 */
	public function listPropertyGroups(?string $with = null): Response
	{
		return $this->connector->send(new ListPropertyGroups($with));
	}


	public function createPropertyGroup(): Response
	{
		return $this->connector->send(new CreatePropertyGroup());
	}


	/**
	 * @param int $id
	 */
	public function getPropertyGroup(int $id): Response
	{
		return $this->connector->send(new GetPropertyGroup($id));
	}


	/**
	 * @param int $id
	 */
	public function updatePropertyGroup(int $id): Response
	{
		return $this->connector->send(new UpdatePropertyGroup($id));
	}


	/**
	 * @param int $id
	 */
	public function deletePropertyGroup(int $id): Response
	{
		return $this->connector->send(new DeletePropertyGroup($id));
	}


	/**
	 * @param int $id
	 */
	public function listThePropertyGroupNamesOfPropertyGroup(int $id): Response
	{
		return $this->connector->send(new ListThePropertyGroupNamesOfPropertyGroup($id));
	}


	/**
	 * @param int $id
	 */
	public function createPropertyGroupName(int $id): Response
	{
		return $this->connector->send(new CreatePropertyGroupName($id));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function getPropertyGroupNameInLanguage(int $id, int $lang): Response
	{
		return $this->connector->send(new GetPropertyGroupNameInLanguage($id, $lang));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function updatePropertyGroupName(int $id, int $lang): Response
	{
		return $this->connector->send(new UpdatePropertyGroupName($id, $lang));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function deletePropertyGroupName(int $id, int $lang): Response
	{
		return $this->connector->send(new DeletePropertyGroupName($id, $lang));
	}


	/**
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listSalesPrices(?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListSalesPrices($updatedAt));
	}


	public function createSalesPrice(): Response
	{
		return $this->connector->send(new CreateSalesPrice());
	}


	/**
	 * @param int $id
	 */
	public function getSalesPrice(int $id): Response
	{
		return $this->connector->send(new GetSalesPrice($id));
	}


	/**
	 * @param int $id
	 */
	public function updateSalesPrice(int $id): Response
	{
		return $this->connector->send(new UpdateSalesPrice($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteSalesPrice(int $id): Response
	{
		return $this->connector->send(new DeleteSalesPrice($id));
	}


	/**
	 * @param int $id
	 */
	public function listReferrerAccounts(int $id): Response
	{
		return $this->connector->send(new ListReferrerAccounts($id));
	}


	/**
	 * @param int $id
	 */
	public function activateReferrerAccount(int $id): Response
	{
		return $this->connector->send(new ActivateReferrerAccount($id));
	}


	/**
	 * @param int $id
	 * @param int $accountType
	 * @param int $accountId
	 */
	public function deactivateReferrerAccount(int $id, int $accountType, int $accountId): Response
	{
		return $this->connector->send(new DeactivateReferrerAccount($id, $accountType, $accountId));
	}


	/**
	 * @param int $id
	 */
	public function listCountriesBySalesPrice(int $id): Response
	{
		return $this->connector->send(new ListCountriesBySalesPrice($id));
	}


	/**
	 * @param int $id
	 */
	public function activateCountry(int $id): Response
	{
		return $this->connector->send(new ActivateCountry($id));
	}


	/**
	 * @param int $id
	 * @param int $countryId
	 */
	public function deactivateCountry(int $id, int $countryId): Response
	{
		return $this->connector->send(new DeactivateCountry($id, $countryId));
	}


	/**
	 * @param int $id
	 */
	public function listActivatedCurrencies(int $id): Response
	{
		return $this->connector->send(new ListActivatedCurrencies($id));
	}


	/**
	 * @param int $id
	 */
	public function activateCurrency(int $id): Response
	{
		return $this->connector->send(new ActivateCurrency($id));
	}


	/**
	 * @param int $id
	 * @param int $currency
	 */
	public function deactivateCurrency(int $id, int $currency): Response
	{
		return $this->connector->send(new DeactivateCurrency($id, $currency));
	}


	/**
	 * @param int $id
	 */
	public function listActivatedCustomerClasses(int $id): Response
	{
		return $this->connector->send(new ListActivatedCustomerClasses($id));
	}


	/**
	 * @param int $id
	 */
	public function activateCustomerClass(int $id): Response
	{
		return $this->connector->send(new ActivateCustomerClass($id));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $id
	 * @param int $customerClassId
	 */
	public function activateCustomerClassDuplicate2(int $id, int $customerClassId): Response
	{
		return $this->connector->send(new ActivateCustomerClass($id, $customerClassId));
	}


	/**
	 * @param int $id
	 */
	public function listNamesOfSalesPrice(int $id): Response
	{
		return $this->connector->send(new ListNamesOfSalesPrice($id));
	}


	/**
	 * @param int $id
	 * @param int $salesPriceId The ID of the sales price.
	 */
	public function createSalesPriceName(int $id, int $salesPriceId): Response
	{
		return $this->connector->send(new CreateSalesPriceName($id, $salesPriceId));
	}


	/**
	 * @param string $lang The language of the sales price.
	 * @param int $id
	 * @param int $salesPriceId The ID of the sales price.
	 */
	public function getsSalesPriceName(string $lang, int $id, int $salesPriceId): Response
	{
		return $this->connector->send(new GetsSalesPriceName($lang, $id, $salesPriceId));
	}


	/**
	 * @param string $lang The language of the sales price.
	 * @param int $id
	 * @param int $salesPriceId The ID of the sales price.
	 */
	public function updateSalesPriceName(string $lang, int $id, int $salesPriceId): Response
	{
		return $this->connector->send(new UpdateSalesPriceName($lang, $id, $salesPriceId));
	}


	/**
	 * @param string $lang The language of the sales price.
	 * @param int $id
	 * @param int $salesPriceId The ID of the sales price.
	 */
	public function deleteSalesPriceName(string $lang, int $id, int $salesPriceId): Response
	{
		return $this->connector->send(new DeleteSalesPriceName($lang, $id, $salesPriceId));
	}


	/**
	 * @param int $id
	 */
	public function listActivatedClientsStores(int $id): Response
	{
		return $this->connector->send(new ListActivatedClientsStores($id));
	}


	/**
	 * @param int $id
	 */
	public function activateClientStore(int $id): Response
	{
		return $this->connector->send(new ActivateClientStore($id));
	}


	/**
	 * @param int $id
	 * @param int $webstoreId
	 */
	public function deactivateClientStore(int $id, int $webstoreId): Response
	{
		return $this->connector->send(new DeactivateClientStore($id, $webstoreId));
	}


	/**
	 * @param int $id
	 */
	public function listActivatedReferrers(int $id): Response
	{
		return $this->connector->send(new ListActivatedReferrers($id));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $id
	 */
	public function activateReferrerDuplicate3(int $id): Response
	{
		return $this->connector->send(new ActivateReferrer($id));
	}


	/**
	 * @param int $id
	 * @param int $referrerId
	 */
	public function deactivatesReferrer(int $id, int $referrerId): Response
	{
		return $this->connector->send(new DeactivatesReferrer($id, $referrerId));
	}


	/**
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listUnits(?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListUnits($updatedAt));
	}


	public function createUnit(): Response
	{
		return $this->connector->send(new CreateUnit());
	}


	/**
	 * @param string $language Language is required to be used for extracting the translations from item/unit.
	 */
	public function getListWithUnitsOfMeasurements(?string $language = null): Response
	{
		return $this->connector->send(new GetListWithUnitsOfMeasurements($language));
	}


	/**
	 * @param int $id
	 */
	public function getUnit(int $id): Response
	{
		return $this->connector->send(new GetUnit($id));
	}


	/**
	 * @param int $id
	 */
	public function updateUnit(int $id): Response
	{
		return $this->connector->send(new UpdateUnit($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteUnit(int $id): Response
	{
		return $this->connector->send(new DeleteUnit($id));
	}


	/**
	 * @param int $id
	 */
	public function listUnitNames(int $id): Response
	{
		return $this->connector->send(new ListUnitNames($id));
	}


	/**
	 * @param int $id
	 */
	public function createUnitName(int $id): Response
	{
		return $this->connector->send(new CreateUnitName($id));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function getUnitName(int $id, int $lang): Response
	{
		return $this->connector->send(new GetUnitName($id, $lang));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function updateUnitName(int $id, int $lang): Response
	{
		return $this->connector->send(new UpdateUnitName($id, $lang));
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function deleteUnitName(int $id, int $lang): Response
	{
		return $this->connector->send(new DeleteUnitName($id, $lang));
	}


	/**
	 * @param string $with Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 * @param int $page Limits the results to a specific page. The page number must be specified. Default value is 1.
	 * @param int $itemsPerPage Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. Default value is 50.
	 * @param int $id Filter restricts the list of results to variations with the specified variation ID. An variation ID must be specified. More than one ID should be separated by commas.
	 * @param int $itemId Filter restricts the list of results to variations with the specified item ID. An item ID must be specified. More than one ID should be separated by commas.
	 * @param int $variationTagId Filter restricts the list of results to variations with the specified tag ID. An tag ID must be specified. More than one ID should be separated by commas.
	 * @param string $itemName Filter restricts the list of results to variations with the specified item name. An item name must be specified.
	 * @param string $flagOne Filter restricts the list of results to variations of items with the flag one. The flag one must be specified.
	 * @param string $flagTwo Filter restricts the list of results to variations of items with the flag two. The flag two must be specified.
	 * @param int $storeSpecial Filter restricts the list of results to variations of items with the specified store special. The following values are allowed: 0 (None), 1 (Special offer), 2 (New item), 3(Top item).
	 * @param int $categoryId Filter restricts the list of results to variations with the specified category id
	 * @param bool $isMain Filter restricts the list of results to variations that are main variations.
	 * @param bool $isActive Filter restricts the list of results to variations that are active.
	 * @param string $barcode Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
	 * @param string $numberExact Filter restricts the list of results to the variation with the variation number specified.
	 * @param string $numberFuzzy Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
	 * @param bool $isBundle Filter restricts the list of results to variations to which variations were added to create a bundle.
	 * @param int $plentyId Filter restricts the list of results to variations that are visible in specified clients. Separate more than one client by commas.
	 * @param int $referrerId Filter restricts the list of results to variations that are visible in specified markets. Separate more than one referrer by commas.
	 * @param string $supplierNumber Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
	 * @param string $supplierNumberFuzzy Filter restricts the list of results to variations that contain the specified supplier number (SQL LIKE operator).
	 * @param string $sku Filter restricts the list of results to variations with the specified SKU. In additional, results can also be restricted to a specific referrer by specifying the referrer ID after a colon. Example: L0R3MIP5UM:104.1
	 * @param int $manufacturerId Filter restricts the list of results to variations with the specified manufacturer ID.
	 * @param string $updatedBetween Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param string $createdBetween Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
	 * @param string $relatedUpdatedBetween Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
	 * @param string $itemDescription Filter restricts the list of results to variations with descriptions that contain the specified string.
	 * @param string $stockWarehouseId Filter restricts the list of results to variations which have physical stock on the given warehouse.
	 * @param int $supplierId Filter restricts the list of results to variations with the specified supplier ID.
	 */
	public function searchVariations(
		?string $with = null,
		?string $lang = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?int $itemId = null,
		?int $variationTagId = null,
		?string $itemName = null,
		?string $flagOne = null,
		?string $flagTwo = null,
		?int $storeSpecial = null,
		?int $categoryId = null,
		?bool $isMain = null,
		?bool $isActive = null,
		?string $barcode = null,
		?string $numberExact = null,
		?string $numberFuzzy = null,
		?bool $isBundle = null,
		?int $plentyId = null,
		?int $referrerId = null,
		?string $supplierNumber = null,
		?string $supplierNumberFuzzy = null,
		?string $sku = null,
		?int $manufacturerId = null,
		?string $updatedBetween = null,
		?string $createdBetween = null,
		?string $relatedUpdatedBetween = null,
		?string $itemDescription = null,
		?string $stockWarehouseId = null,
		?int $supplierId = null,
	): Response
	{
		return $this->connector->send(new SearchVariations($with, $lang, $page, $itemsPerPage, $id, $itemId, $variationTagId, $itemName, $flagOne, $flagTwo, $storeSpecial, $categoryId, $isMain, $isActive, $barcode, $numberExact, $numberFuzzy, $isBundle, $plentyId, $referrerId, $supplierNumber, $supplierNumberFuzzy, $sku, $manufacturerId, $updatedBetween, $createdBetween, $relatedUpdatedBetween, $itemDescription, $stockWarehouseId, $supplierId));
	}


	public function updateUpTo50variations(): Response
	{
		return $this->connector->send(new UpdateUpTo50Variations());
	}


	public function bulkUpdateCategoryLinks(): Response
	{
		return $this->connector->send(new BulkUpdateCategoryLinks());
	}


	public function bulkCreateCategoryLinks(): Response
	{
		return $this->connector->send(new BulkCreateCategoryLinks());
	}


	public function listAllLinksBetweenVariationsAndMarkets(): Response
	{
		return $this->connector->send(new ListAllLinksBetweenVariationsAndMarkets());
	}


	public function createUpTo50linksBetweenVariationsAndMarkets(): Response
	{
		return $this->connector->send(new CreateUpTo50LinksBetweenVariationsAndMarkets());
	}


	public function bulkUpdateProperties(): Response
	{
		return $this->connector->send(new BulkUpdateProperties());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function bulkUpdatePropertiesDuplicate4(): Response
	{
		return $this->connector->send(new BulkUpdateProperties());
	}


	/**
	 * @param int $variationId Filter that restricts the search result to the sales price data of a specific variation.
	 * @param int $salesPriceId Filter that restricts the search result to the sales price data of variations linked to a specific sales price.
	 * @param string $updatedAt Filter that restricts the search result to links between variations and sales prices updated after a specific point in time.
	 */
	public function getAllSalesPriceRelations(
		?int $variationId = null,
		?int $salesPriceId = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new GetAllSalesPriceRelations($variationId, $salesPriceId, $updatedAt));
	}


	public function bulkUpdatePrices(): Response
	{
		return $this->connector->send(new BulkUpdatePrices());
	}


	public function bulkCreatePrices(): Response
	{
		return $this->connector->send(new BulkCreatePrices());
	}


	/**
	 * @param int $id
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listImagesOfItem(int $id, ?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListImagesOfItem($id, $updatedAt));
	}


	/**
	 * @param int $id
	 * @param int $imageId The unique ID of the image
	 * @param int $itemId The unique ID of the item
	 * @param int $valueId The unique ID of the attribute value
	 * @param int $attributeId The unique ID of the attribute
	 */
	public function listAttributeValueImageLink(
		int $id,
		?int $imageId = null,
		?int $itemId = null,
		?int $valueId = null,
		?int $attributeId = null,
	): Response
	{
		return $this->connector->send(new ListAttributeValueImageLink($id, $imageId, $itemId, $valueId, $attributeId));
	}


	/**
	 * @param int $id
	 */
	public function uploadNewImage(int $id): Response
	{
		return $this->connector->send(new UploadNewImage($id));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function getImage(int $id, int $imageId): Response
	{
		return $this->connector->send(new GetImage($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function updateImage(int $id, int $imageId): Response
	{
		return $this->connector->send(new UpdateImage($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function deleteImage(int $id, int $imageId): Response
	{
		return $this->connector->send(new DeleteImage($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function createAttributeValueImageLink(int $id, int $imageId): Response
	{
		return $this->connector->send(new CreateAttributeValueImageLink($id, $imageId));
	}


	/**
	 * @param int $imageId The unique ID of the image
	 * @param int $valueId The unique ID of the value
	 * @param int $id
	 * @param int $itemId The unique ID of the item
	 */
	public function getAttributeValueImageLink(int $imageId, int $valueId, int $id, int $itemId): Response
	{
		return $this->connector->send(new GetAttributeValueImageLink($imageId, $valueId, $id, $itemId));
	}


	/**
	 * @param int $imageId The unique ID of the image
	 * @param int $valueId The unique ID of the attribute value
	 * @param int $id
	 * @param int $itemId The unique ID of the item
	 * @param int $attributeId The unique ID of the attribute
	 */
	public function updateAttributeValueImageLink(
		int $imageId,
		int $valueId,
		int $id,
		int $itemId,
		int $attributeId,
	): Response
	{
		return $this->connector->send(new UpdateAttributeValueImageLink($imageId, $valueId, $id, $itemId, $attributeId));
	}


	/**
	 * @param int $imageId The unique ID of the image
	 * @param int $valueId The unique ID of the attribute value
	 * @param int $id
	 * @param int $itemId The unique ID of the item
	 */
	public function deleteAttributeValueImageLink(int $imageId, int $valueId, int $id, int $itemId): Response
	{
		return $this->connector->send(new DeleteAttributeValueImageLink($imageId, $valueId, $id, $itemId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function listAvailabilities(int $id, int $imageId): Response
	{
		return $this->connector->send(new ListAvailabilities($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function createAvailability(int $id, int $imageId): Response
	{
		return $this->connector->send(new CreateAvailability($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function deleteAvailability(int $id, int $imageId): Response
	{
		return $this->connector->send(new DeleteAvailability($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function listNamesOfImage(int $id, int $imageId): Response
	{
		return $this->connector->send(new ListNamesOfImage($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function createImageName(int $id, int $imageId): Response
	{
		return $this->connector->send(new CreateImageName($id, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 * @param int $lang
	 */
	public function getImageName(int $id, int $imageId, int $lang): Response
	{
		return $this->connector->send(new GetImageName($id, $imageId, $lang));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 * @param int $lang
	 */
	public function updateImageName(int $id, int $imageId, int $lang): Response
	{
		return $this->connector->send(new UpdateImageName($id, $imageId, $lang));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 * @param int $lang
	 */
	public function deleteImageName(int $id, int $imageId, int $lang): Response
	{
		return $this->connector->send(new DeleteImageName($id, $imageId, $lang));
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function listImageLinksOfImage(int $id, int $imageId): Response
	{
		return $this->connector->send(new ListImageLinksOfImage($id, $imageId));
	}


	/**
	 * @param int $id
	 */
	public function listCrossSellingLinks(int $id): Response
	{
		return $this->connector->send(new ListCrossSellingLinks($id));
	}


	/**
	 * @param int $id
	 */
	public function createCrossSellingLink(int $id): Response
	{
		return $this->connector->send(new CreateCrossSellingLink($id));
	}


	/**
	 * @param int $id
	 * @param int $crossItemId
	 */
	public function updateCrossSellingLink(int $id, int $crossItemId): Response
	{
		return $this->connector->send(new UpdateCrossSellingLink($id, $crossItemId));
	}


	/**
	 * @param int $id
	 * @param int $crossItemId
	 */
	public function deleteCrossSellingLink(int $id, int $crossItemId): Response
	{
		return $this->connector->send(new DeleteCrossSellingLink($id, $crossItemId));
	}


	/**
	 * @param int $id
	 */
	public function getItemLabel(int $id): Response
	{
		return $this->connector->send(new GetItemLabel($id));
	}


	/**
	 * @param int $id
	 */
	public function listImageLinksOfItem(int $id): Response
	{
		return $this->connector->send(new ListImageLinksOfItem($id));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listTexts(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListTexts($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createTexts(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateTexts($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $lang
	 */
	public function getTexts(int $id, int $variationId, int $lang): Response
	{
		return $this->connector->send(new GetTexts($id, $variationId, $lang));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $lang
	 */
	public function updateTexts(int $id, int $variationId, int $lang): Response
	{
		return $this->connector->send(new UpdateTexts($id, $variationId, $lang));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $lang
	 */
	public function deleteTexts(int $id, int $variationId, int $lang): Response
	{
		return $this->connector->send(new DeleteTexts($id, $variationId, $lang));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listImagesOfVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListImagesOfVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function getVariationLabel(int $id, int $variationId): Response
	{
		return $this->connector->send(new GetVariationLabel($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listIdentNumberOfVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListIdentNumberOfVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createMarketIdentNumber(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateMarketIdentNumber($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $marketIdentNumberId
	 */
	public function getMarketIdentNumber(int $id, int $variationId, int $marketIdentNumberId): Response
	{
		return $this->connector->send(new GetMarketIdentNumber($id, $variationId, $marketIdentNumberId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $marketIdentNumberId
	 */
	public function updatesMarketIdentNumber(int $id, int $variationId, int $marketIdentNumberId): Response
	{
		return $this->connector->send(new UpdatesMarketIdentNumber($id, $variationId, $marketIdentNumberId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $marketIdentNumberId
	 */
	public function deletesMarketIdentNumber(int $id, int $variationId, int $marketIdentNumberId): Response
	{
		return $this->connector->send(new DeletesMarketIdentNumber($id, $variationId, $marketIdentNumberId));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 * @param array $columns The properties to be loaded
	 */
	public function listStockOfVariationPerWarehouse(
		int $variationId,
		int $id,
		int $itemId,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new ListStockOfVariationPerWarehouse($variationId, $id, $itemId, $columns));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 */
	public function bookIncomingStock(int $variationId, int $id, int $itemId): Response
	{
		return $this->connector->send(new BookIncomingStock($variationId, $id, $itemId));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 */
	public function bookOutgoingStock(int $variationId, int $id, int $itemId): Response
	{
		return $this->connector->send(new BookOutgoingStock($variationId, $id, $itemId));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 */
	public function correctStock(int $variationId, int $id, int $itemId): Response
	{
		return $this->connector->send(new CorrectStock($variationId, $id, $itemId));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 * @param int $warehouseId The ID of the warehouse
	 * @param string $createdAtFrom Get entries with createdAt date after this date
	 * @param string $createdAtTo Get entries with createdAt date before this date
	 * @param int $year Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
	 * @param int $page The requested page. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of items per page. The default number per page is 50.
	 * @param array $columns The properties to be loaded
	 */
	public function listStockMovements(
		int $variationId,
		int $id,
		int $itemId,
		?int $warehouseId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?int $year = null,
		int $page,
		int $itemsPerPage,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new ListStockMovements($variationId, $id, $itemId, $warehouseId, $createdAtFrom, $createdAtTo, $year, $page, $itemsPerPage, $columns));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 */
	public function redistributeStock(int $variationId, int $id, int $itemId): Response
	{
		return $this->connector->send(new RedistributeStock($variationId, $id, $itemId));
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 * @param int $page The requested page
	 * @param int $itemsPerPage The number of items per page
	 * @param array $columns The properties to be loaded
	 * @param string $sortBy The column to be sorted by
	 * @param string $sortOrder The sort direction
	 */
	public function listStockOfVariationPerStorageLocations(
		int $variationId,
		int $id,
		int $itemId,
		int $page,
		int $itemsPerPage,
		?array $columns = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new ListStockOfVariationPerStorageLocations($variationId, $id, $itemId, $page, $itemsPerPage, $columns, $sortBy, $sortOrder));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listAdditionalSkus(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListAdditionalSkus($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createAdditionalSku(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateAdditionalSku($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $additionalSkuId
	 */
	public function getsAdditionalSku(int $id, int $variationId, int $additionalSkuId): Response
	{
		return $this->connector->send(new GetsAdditionalSku($id, $variationId, $additionalSkuId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $additionalSkuId
	 */
	public function updateAdditionalSku(int $id, int $variationId, int $additionalSkuId): Response
	{
		return $this->connector->send(new UpdateAdditionalSku($id, $variationId, $additionalSkuId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $additionalSkuId
	 */
	public function deleteAdditionalSku(int $id, int $variationId, int $additionalSkuId): Response
	{
		return $this->connector->send(new DeleteAdditionalSku($id, $variationId, $additionalSkuId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param string $with Includes the specified variation barcode information in the results. The following parameter is available: <ul><li>barcode</li></ul>
	 */
	public function listVariationBarcodes(int $id, int $variationId, ?string $with = null): Response
	{
		return $this->connector->send(new ListVariationBarcodes($id, $variationId, $with));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createVariationBarcode(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateVariationBarcode($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $barcodeId
	 */
	public function getVariationBarcode(int $id, int $variationId, int $barcodeId): Response
	{
		return $this->connector->send(new GetVariationBarcode($id, $variationId, $barcodeId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $barcodeId
	 */
	public function updateVariationBarcode(int $id, int $variationId, int $barcodeId): Response
	{
		return $this->connector->send(new UpdateVariationBarcode($id, $variationId, $barcodeId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $barcodeId
	 */
	public function deleteVariationBarcode(int $id, int $variationId, int $barcodeId): Response
	{
		return $this->connector->send(new DeleteVariationBarcode($id, $variationId, $barcodeId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listBundleComponents(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListBundleComponents($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function addVariationToBundle(int $id, int $variationId): Response
	{
		return $this->connector->send(new AddVariationToBundle($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $bundleId
	 */
	public function getVariationBundle(int $id, int $variationId, int $bundleId): Response
	{
		return $this->connector->send(new GetVariationBundle($id, $variationId, $bundleId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $bundleId
	 */
	public function updateVariationBundle(int $id, int $variationId, int $bundleId): Response
	{
		return $this->connector->send(new UpdateVariationBundle($id, $variationId, $bundleId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $bundleId
	 */
	public function removeBundleComponent(int $id, int $variationId, int $bundleId): Response
	{
		return $this->connector->send(new RemoveBundleComponent($id, $variationId, $bundleId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listCategoriesLinkedToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListCategoriesLinkedToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function linkCategoryToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new LinkCategoryToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $catId
	 */
	public function getLinkBetweenCategoryAndVariation(int $id, int $variationId, int $catId): Response
	{
		return $this->connector->send(new GetLinkBetweenCategoryAndVariation($id, $variationId, $catId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $catId
	 */
	public function updateVariationCategoryLink(int $id, int $variationId, int $catId): Response
	{
		return $this->connector->send(new UpdateVariationCategoryLink($id, $variationId, $catId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $catId
	 */
	public function removeCategoryFromVariation(int $id, int $variationId, int $catId): Response
	{
		return $this->connector->send(new RemoveCategoryFromVariation($id, $variationId, $catId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listClientsLinkedToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListClientsLinkedToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function linkClientToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new LinkClientToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $plentyId
	 */
	public function unlinkClientFromVariation(int $id, int $variationId, int $plentyId): Response
	{
		return $this->connector->send(new UnlinkClientFromVariation($id, $variationId, $plentyId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listBundles(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListBundles($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listDefaultCategoryLinks(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListDefaultCategoryLinks($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createDefaultCategoryLink(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateDefaultCategoryLink($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $plentyId
	 */
	public function getsDefaultCategoryLink(int $id, int $variationId, int $plentyId): Response
	{
		return $this->connector->send(new GetsDefaultCategoryLink($id, $variationId, $plentyId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $plentyId
	 */
	public function deleteDefaultCategoryLink(int $id, int $variationId, int $plentyId): Response
	{
		return $this->connector->send(new DeleteDefaultCategoryLink($id, $variationId, $plentyId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param string $updatedAt Filter restricts the list of results to variation images updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function listImageLinksOfVariation(int $id, int $variationId, ?string $updatedAt = null): Response
	{
		return $this->connector->send(new ListImageLinksOfVariation($id, $variationId, $updatedAt));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createImageLink(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateImageLink($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $imageId
	 */
	public function deleteImageLink(int $id, int $variationId, int $imageId): Response
	{
		return $this->connector->send(new DeleteImageLink($id, $variationId, $imageId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listMarketsLinkedToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListMarketsLinkedToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createLinkBetweenVariationAndMarket(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateLinkBetweenVariationAndMarket($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function deleteAllMarketLinksOfOneVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new DeleteAllMarketLinksOfOneVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $marketplaceId
	 */
	public function deleteLinkBetweenVariationAndMarket(int $id, int $variationId, int $marketplaceId): Response
	{
		return $this->connector->send(new DeleteLinkBetweenVariationAndMarket($id, $variationId, $marketplaceId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listPropertyValuesLinkedToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListPropertyValuesLinkedToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createLinkBetweenVariationAndPropertyValue(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateLinkBetweenVariationAndPropertyValue($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function deletesAllLinksBetweenVariationAndItsPropertyValues(int $id, int $variationId): Response
	{
		return $this->connector->send(new DeletesAllLinksBetweenVariationAndItsPropertyValues($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function getPropertyValue(int $id, int $variationId, int $propertyId): Response
	{
		return $this->connector->send(new GetPropertyValue($id, $variationId, $propertyId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function updatePropertyValue(int $id, int $variationId, int $propertyId): Response
	{
		return $this->connector->send(new UpdatePropertyValue($id, $variationId, $propertyId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function deleteLinkBetweenVariationAndPropertyValue(int $id, int $variationId, int $propertyId): Response
	{
		return $this->connector->send(new DeleteLinkBetweenVariationAndPropertyValue($id, $variationId, $propertyId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listSalesPricesOfVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListSalesPricesOfVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createLinkBetweenVariationAndSalesPrice(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateLinkBetweenVariationAndSalesPrice($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function deleteAllLinksBetweenVariationAndItsSalesPrices(int $id, int $variationId): Response
	{
		return $this->connector->send(new DeleteAllLinksBetweenVariationAndItsSalesPrices($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $priceId
	 */
	public function getSalesPriceDataForVariation(int $id, int $variationId, int $priceId): Response
	{
		return $this->connector->send(new GetSalesPriceDataForVariation($id, $variationId, $priceId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $priceId
	 */
	public function updateSalesPriceData(int $id, int $variationId, int $priceId): Response
	{
		return $this->connector->send(new UpdateSalesPriceData($id, $variationId, $priceId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $priceId
	 */
	public function deleteLinkBetweenVariationAndSalesPrice(int $id, int $variationId, int $priceId): Response
	{
		return $this->connector->send(new DeleteLinkBetweenVariationAndSalesPrice($id, $variationId, $priceId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listSkus(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListSkus($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createSku(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateSku($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $skuId
	 */
	public function getSku(int $id, int $variationId, int $skuId): Response
	{
		return $this->connector->send(new GetSku($id, $variationId, $skuId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $skuId
	 */
	public function updateSku(int $id, int $variationId, int $skuId): Response
	{
		return $this->connector->send(new UpdateSku($id, $variationId, $skuId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $skuId
	 */
	public function deleteSku(int $id, int $variationId, int $skuId): Response
	{
		return $this->connector->send(new DeleteSku($id, $variationId, $skuId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listsSuppliersForVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListsSuppliersForVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createLinkBetweenVariationAndSupplier(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateLinkBetweenVariationAndSupplier($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $variationSupplierId
	 */
	public function getSupplierDataForVariation(int $id, int $variationId, int $variationSupplierId): Response
	{
		return $this->connector->send(new GetSupplierDataForVariation($id, $variationId, $variationSupplierId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $variationSupplierId
	 */
	public function updatesSupplierDataForVariation(int $id, int $variationId, int $variationSupplierId): Response
	{
		return $this->connector->send(new UpdatesSupplierDataForVariation($id, $variationId, $variationSupplierId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $variationSupplierId
	 */
	public function deleteLinkBetweenVariationAndSupplier(int $id, int $variationId, int $variationSupplierId): Response
	{
		return $this->connector->send(new DeleteLinkBetweenVariationAndSupplier($id, $variationId, $variationSupplierId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function listTheWarehousesLinkedToVariation(int $id, int $variationId): Response
	{
		return $this->connector->send(new ListTheWarehousesLinkedToVariation($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function createLinkBetweenVariationAndWarehouse(int $id, int $variationId): Response
	{
		return $this->connector->send(new CreateLinkBetweenVariationAndWarehouse($id, $variationId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $warehouseId
	 */
	public function getWarehouseDataForVariation(int $id, int $variationId, int $warehouseId): Response
	{
		return $this->connector->send(new GetWarehouseDataForVariation($id, $variationId, $warehouseId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $warehouseId
	 */
	public function updateWarehouseDataOfVariation(int $id, int $variationId, int $warehouseId): Response
	{
		return $this->connector->send(new UpdateWarehouseDataOfVariation($id, $variationId, $warehouseId));
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $warehouseId
	 */
	public function deleteLinkBetweenWarehouseAndVariation(int $id, int $variationId, int $warehouseId): Response
	{
		return $this->connector->send(new DeleteLinkBetweenWarehouseAndVariation($id, $variationId, $warehouseId));
	}


	/**
	 * @param int $itemId
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 */
	public function showItem(int $itemId, ?string $lang = null): Response
	{
		return $this->connector->send(new ShowItem($itemId, $lang));
	}


	/**
	 * @param int $itemId
	 */
	public function updateItem(int $itemId): Response
	{
		return $this->connector->send(new UpdateItem($itemId));
	}


	/**
	 * @param int $itemId
	 */
	public function deleteItem(int $itemId): Response
	{
		return $this->connector->send(new DeleteItem($itemId));
	}


	/**
	 * @param int $itemId
	 */
	public function copiesItem(int $itemId): Response
	{
		return $this->connector->send(new CopiesItem($itemId));
	}


	/**
	 * @param int $itemId
	 */
	public function fillItemToEs(int $itemId): Response
	{
		return $this->connector->send(new FillItemToEs($itemId));
	}


	/**
	 * @param int $itemId
	 */
	public function listShippingProfilesOfItem(int $itemId): Response
	{
		return $this->connector->send(new ListShippingProfilesOfItem($itemId));
	}


	/**
	 * @param int $itemId
	 */
	public function activateShippingProfile(int $itemId): Response
	{
		return $this->connector->send(new ActivateShippingProfile($itemId));
	}


	/**
	 * @param int $itemId
	 */
	public function deactivateShippingProfilesOfItem(int $itemId): Response
	{
		return $this->connector->send(new DeactivateShippingProfilesOfItem($itemId));
	}


	/**
	 * @param int $itemId The unique ID of the item
	 * @param int $id The unique ID of the link between item and shipping profile
	 */
	public function deactivateShippingProfile(int $itemId, int $id): Response
	{
		return $this->connector->send(new DeactivateShippingProfile($itemId, $id));
	}


	/**
	 * @param int $itemId
	 * @param string $with Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 * @param int $page Limits the results to a specific page. The page number must be specified.
	 * @param int $itemsPerPage Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
	 * @param bool $isMain Filter restricts the list of results to variations that are main variations.
	 * @param bool $isActive Filter restricts the list of results to variations that are active.
	 * @param string $barcode Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
	 * @param string $numberExact Filter restricts the list of results to the variation with the variation number specified.
	 * @param string $numberFuzzy Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
	 * @param bool $isBundle Filter restricts the list of results to variations to which variations were added to create a bundle.
	 * @param string $supplierNumber Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
	 * @param int $manufacturerId Filter restricts the list of results to variations with the specified manufacturer ID.
	 * @param string $updatedBetween Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param string $createdBetween Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
	 * @param string $relatedUpdatedBetween Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
	 */
	public function listVariationsOfItem(
		int $itemId,
		?string $with = null,
		?string $lang = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?bool $isMain = null,
		?bool $isActive = null,
		?string $barcode = null,
		?string $numberExact = null,
		?string $numberFuzzy = null,
		?bool $isBundle = null,
		?string $supplierNumber = null,
		?int $manufacturerId = null,
		?string $updatedBetween = null,
		?string $createdBetween = null,
		?string $relatedUpdatedBetween = null,
	): Response
	{
		return $this->connector->send(new ListVariationsOfItem($itemId, $with, $lang, $page, $itemsPerPage, $isMain, $isActive, $barcode, $numberExact, $numberFuzzy, $isBundle, $supplierNumber, $manufacturerId, $updatedBetween, $createdBetween, $relatedUpdatedBetween));
	}


	/**
	 * @param int $itemId
	 */
	public function createVariation(int $itemId): Response
	{
		return $this->connector->send(new CreateVariation($itemId));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param string $with Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
	 */
	public function getVariation(int $itemId, int $variationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetVariation($itemId, $variationId, $with));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 */
	public function updateVariation(int $itemId, int $variationId): Response
	{
		return $this->connector->send(new UpdateVariation($itemId, $variationId));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 */
	public function deleteVariation(int $itemId, int $variationId): Response
	{
		return $this->connector->send(new DeleteVariation($itemId, $variationId));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 */
	public function fillVariation(int $itemId, int $variationId): Response
	{
		return $this->connector->send(new FillVariation($itemId, $variationId));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function getPropertyValueTexts(int $itemId, int $variationId, int $propertyId): Response
	{
		return $this->connector->send(new GetPropertyValueTexts($itemId, $variationId, $propertyId));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 */
	public function createPropertyValueTextByLanguage(int $itemId, int $variationId, int $propertyId): Response
	{
		return $this->connector->send(new CreatePropertyValueTextByLanguage($itemId, $variationId, $propertyId));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 * @param int $lang
	 */
	public function getPropertyValueTextByLanguage(int $itemId, int $variationId, int $propertyId, int $lang): Response
	{
		return $this->connector->send(new GetPropertyValueTextByLanguage($itemId, $variationId, $propertyId, $lang));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 * @param int $lang
	 */
	public function updatePropertyValueTextByLanguage(
		int $itemId,
		int $variationId,
		int $propertyId,
		int $lang,
	): Response
	{
		return $this->connector->send(new UpdatePropertyValueTextByLanguage($itemId, $variationId, $propertyId, $lang));
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 * @param int $propertyId
	 * @param int $lang
	 */
	public function deletePropertyValueTextByLanguage(
		int $itemId,
		int $variationId,
		int $propertyId,
		int $lang,
	): Response
	{
		return $this->connector->send(new DeletePropertyValueTextByLanguage($itemId, $variationId, $propertyId, $lang));
	}
}
