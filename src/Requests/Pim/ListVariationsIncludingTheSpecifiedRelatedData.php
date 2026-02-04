<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List variations including the specified related data
 *
 * Lists variations including the in 'with' specified related data.
 */
class ListVariationsIncludingTheSpecifiedRelatedData extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'additionalSkus' = The additional skus of the variation.</li><li>'attributeValues' = The attribute values of the variation.</li><li>'attributeValues.attribute' = Includes attributeValues. The attribute data to the related attribute ID.</li><li>'attributeValues.attributeValue' = Includes attributeValues. The attribute value data to the related attribute value ID.</li><li>'barcodes' = The barcodes of the variation.</li><li>'barcodes.barcode' = Includes barcodes. The barcode data to the related barcode ID.</li><li>'base' = The variation base.</li><li>'base.item' = Includes base. The item data of the variation.</li><li>'base.itemSerialNumber' = Includes base. The item serial numbers of the variation.</li><li>'base.feedback' = Includes base. The feedback of the variation.</li><li>'base.characteristics' = Includes base. The characteristics of the variation.</li><li>'base.crossSelling' = Includes base. The cross selling items of the variation.</li><li>'base.texts' = Includes base. The texts of the variation.</li><li>'base.availability' = Includes base. The availability data related to the variation's availability ID.</li><li>'base.images' = Includes base. The images linked to the item.</li><li>'base.shippingProfiles' = Includes base. The shipping profiles linked to the item.</li><li>'base.stock' = Includes base. The stock of the variation.</li><li>'base.stockStorageLocations' = Includes base. The stock storage locations of the variation.</li><li>'bundleComponents' = The bundle components of the variation.</li><li>'categories' = The categories of the variation.</li><li>'categories.category' = Includes categories. The related category data for each category ID.</li><li>'categories.categoryBranch' = Includes categories. The related category branch data for each category ID.</li><li>'clients' = The clients of the variation.</li><li>'defaultCategories' = The default categories of the variation</li><li>'defaultCategories.category' = Includes defaultCategories. The category data to the related category ID.</li><li>'images' = The images of the variation</li><li>'images.image' = Includes images. The image data to the related image ID.</li><li>'markets' = The markets of the variation.</li><li>'marketIdentNumbers' = The market ident numbers of the variation</li><li>'salesPrices' = The sales prices of the variation.</li><li>'salesPrices.salesPrice' = Includes salesPrices. The sales price data to the related sales price ID.</li><li>'skus' = The skus of the variation.</li><li>'supplier' = The supplier of the variation.</li><li>'supplier.supplier' = Includes supplier. The contact data to the related supplier ID.</li><li>'timestamps' = The timetamps of the variation.</li><li>'warehouses' = The warehouses of the variation</li><li>'warehouses.warehouse' = Includes warehouses. The warehouse data to the related warehouse ID.</li><li>'unit' = The unit of the variation</li><li>'unit.unit' = Includes unit. The unit data of the related unit ID.</li><li>'tags' = The tags of the variation.</li><li>'tags.tag' = Includes tags. The tag data to the related tag ID.</li><li>'properties' = The properties of the variation.</li><li>'properties.property' = Includes properties. The property data to the related property ID.</li><li>'comments' = The comments of the variation.</li><li>'inheritance' = The inheritance of the variation.</li></ul>
	 * @param null|string $sortBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'id'</li><li>'itemId'</li><li>'isMain'</li><li>'position'</li><li>'availabilityId'</li><li>'createdAt'</li><li>'updatedAt'</li><li>'itemUpdatedAt'</li><li>'relatedUpdatedAt'</li></ul>
	 * @param null|string $groupBy Groups the result. The following parameters are available:<ul><li>'itemId' = Groups the result by the item ID.</li><li>'itemAttributeValue' = Groups the result by the attribute with the flag 'isGroupable'.</li></ul>
	 * @param null|string $query Filter restricts the list of results to variations matching the specified query
	 * @param null|string $ids Filter restricts the list of results to variations with the specified IDs. More than one parameter should be separated by commas. If you use this filter no other filter will be considered. Limited to 500 ids
	 * @param null|int $itemId Filter restricts the list of results to variations with the specified item ID. Limited to 100 ids
	 * @param null|string $itemIds Filter restricts the list of results to variations with the specified item IDs. More than one parameter should be separated by commas.
	 * @param null|bool $isActive Filter restricts the list of results to variations which are active/inactive.
	 * @param null|bool $isMain Filter restricts the list of results to variations which are main/not main.
	 * @param null|bool $isSalable Filter restricts the list of results to variations which are salable.
	 * @param null|int $supplierId Filter restricts the list of results to variations which have the given supplier ID.
	 * @param null|string $availabilityIds Filter restricts the list of results to variations with the specified availability IDs. More than one parameter should be separated by commas.
	 * @param null|bool $hasChildren Filter restricts the list of results to variations which have children.
	 * @param null|bool $hasActiveChildren Filter restricts the list of results to variations which have active children.
	 * @param null|int $attributeId Filter restricts the list of results to variations which have the specified attribute ID.
	 * @param null|string $anyAttributeId Filter restricts the list of results to variations which have any of the specified attribute IDs. More than one parameter should be separated by commas.
	 * @param null|string $allAttributeIds Filter restricts the list of results to variations which have all specified attribute IDs. More than one parameter should be separated by commas.
	 * @param null|int $attributeValueId Filter restricts the list of results to variations which have the specified attribute value ID.
	 * @param null|string $anyAttributeValueId Filter restricts the list of results to variations which have the any of the specified attribute value IDs. More than one parameter should be separated by commas.
	 * @param null|string $allAttributeValueIds Filter restricts the list of results to variations which have all specified attribute value IDs. More than one parameter should be separated by commas.
	 * @param null|string $barcodeCode Filter restricts the list of results to variations which have a barcode with the specified code.
	 * @param null|int $barcodeId Filter restricts the list of results to variations which have a barcode with the specified ID.
	 * @param null|string $bundleType Filter restricts the list of results to variations with the specified bundle type.
	 * @param null|int $categoryId Filter restricts the list of results to variations which have the specified category ID.
	 * @param null|string $anyCategoryId Filter restricts the list of results to variations which have any of the specified category IDs. More than one parameter should be separated by commas.
	 * @param null|string $allCategoryIds Filter restricts the list of results to variations which have all specified category IDs. More than one parameter should be separated by commas.
	 * @param null|string $anyCharacteristicId Filter restricts the list of results to variations which have any of the specified characteristic IDs.
	 * @param null|string $allCharacteristicIds Filter restricts the list of results to variations which have all specified characteristic IDs.
	 * @param null|int $clientId Filter restricts the list of results to variations which have the specified client ID.
	 * @param null|string $anyClientId Filter restricts the list of results to variations which have any of the specified client IDs. More than one parameter should be separated by commas.
	 * @param null|string $allClientIds Filter restricts the list of results to variations which have all specified client IDs. More than one parameter should be separated by commas.
	 * @param null|string $automaticClientVisibilities Filter restricts the list of results to variations which have any of the specified automatic client visibilities. More than one parameter should be separated by commas.
	 * @param null|float|int $imageHasMarketId Filter restricts the list of results to variations which have an image available for the specified market ID.
	 * @param null|int $flag1 Filter restricts the list of results to variations with the specified flag one.
	 * @param null|int $flag2 Filter restricts the list of results to variations with the specified flag two.
	 * @param null|int $manufacturerId Filter restricts the list of results to variations with the specified manufacturer ID.
	 * @param null|string $anyManufacturerId Filter restricts the list of results to variations with any of the specified manufacturer IDs.
	 * @param null|string $itemType Filter restricts the list of results to variations which have the specified item type.
	 * @param null|float|int $marketId Filter restricts the list of results to variations which have the specified market ID.
	 * @param null|string $anyMarketId Filter restricts the list of results to variations which have any of the specified market IDs.
	 * @param null|string $referrerIds Filter restricts the list of results to variations which have/not have any of the specified market IDs.
	 * @param null|string $allMarketIds Filter restricts the list of results to variations which have all specified market IDs.
	 * @param null|string $priceBetween Filter restricts the list of results to variations which have a sales price between the specified minimum and maximum value. Minimum and maximum value should be separated by a comma.
	 * @param null|string $priceBetweenById Filter restricts the list of results to variations where the specified sales price is between the specified minimum and maximum value. Sales price ID, Minimum and maximum value should be separated by a comma.
	 * @param null|string $priceCalculationUuid Filter restricts the list of results to variations with the specified price calculiation uuid.
	 * @param null|string $salesPriceIds Filter restricts the list of results to variations which match specified sales price IDs criteria. More than one parameter should be separated by commas.
	 * @param null|string $anySalesPriceId Filter restricts the list of results to variations which have any of the specified sales price IDs. More than one parameter should be separated by commas.
	 * @param null|int $propertySelectionId Filter restricts the list of results to variations which have the specified property selection ID.
	 * @param null|string $anyPropertySelectionId Filter restricts the list of results to variations which have any of the specified property selection IDs.
	 * @param null|string $allPropertySelectionIds Filter restricts the list of results to variations which have all specified property selection IDs.
	 * @param null|string $hasNameInLanguage Filter restricts the list of results to variations which have a name in the specified language.
	 * @param null|int $bundleComponentVariationId Filter restricts the list of results to variations which have the specified bundle component variation ID.
	 * @param null|string $warehouseIds Filter restricts the result to variations which meet the specified warehouse id criteria. Allowed operators are: 'eq', 'not', 'nin' and 'in'.
	 * @param null|int $netStock Filter restricts the result to variations which meet the specified net stock criteria. Allowed operators are: 'eq', 'lt', 'lte', 'gt' and 'gte'.
	 * @param null|int $physicalStock Filter restricts the result to variations which meet the specified physical stock criteria. Allowed operators are: 'eq', 'lt', 'lte', 'gt' and 'gte'.
	 * @param null|string $itemNames Filter restricts the list of results to variations matching any name of the item.
	 * @param null|string $itemName1 Filter restricts the list of results to variations matching name 1 of the item
	 * @param null|string $itemName2 Filter restricts the list of results to variations matching name 2 of the item.
	 * @param null|string $itemName3 Filter restricts the list of results to variations matching name 3 of the item.
	 * @param null|string $number Filter restricts the list of results to variations which matching the number of the variation.
	 * @param null|string $model Filter restricts the list of results to variations which matching the model of the variation.
	 * @param null|string $supplierItemNumber Filter restricts the list of results to variations which matching the supplier item number of the variation.
	 * @param null|string $lang Specifies the language of the language-dependent filters
	 * @param null|string $createdAt Filter restricts the list of results to variations which have been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $updatedAt Filter restricts the list of results to variations which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $itemCreatedAt Filter restricts the list of results to variations whose item has been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $itemUpdatedAt Filter restricts the list of results to variations whose item has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $availabilityUpdatedAt Filter restricts the list of results to variations whose availablity has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $stockUpdatedAt Filter restricts the list of results to variations whose stock has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $barcodeUpdatedAt Filter restricts the list of results to variations whose barcodes has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $categoryUpdatedAt Filter restricts the list of results to variations whose categories has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $clientUpdatedAt Filter restricts the list of results to variations whose clients has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $marketUpdatedAt Filter restricts the list of results to variations whose markets has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $propertyUpdatedAt Filter restricts the list of results to variations whose properties has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $salesPriceUpdatedAt Filter restricts the list of results to variations whose sales prices have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $supplierUpdatedAt Filter restricts the list of results to variations whose suppliers has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $tagUpdatedAt Filter restricts the list of results to variations whose tags has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $warehouseUpdatedAt Filter restricts the list of results to variations whose warehouse has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
	 * @param null|string $relatedUpdatedAt Filter restricts the list of results to variations whose relations (any) has been updated in the specified time frame. The from and to parameter should be separated by a coma. If there is no to value, The current time is used instead.
	 * @param null|int $page The requested page of results. Default value is 1.
	 * @param null|int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param null|bool $hasLowestPrice Filter restricts the list of results to variations which has or has not lowest price.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $sortBy = null,
		protected ?string $groupBy = null,
		protected ?string $query = null,
		protected ?string $ids = null,
		protected ?int $itemId = null,
		protected ?string $itemIds = null,
		protected ?bool $isActive = null,
		protected ?bool $isMain = null,
		protected ?bool $isSalable = null,
		protected ?int $supplierId = null,
		protected ?string $availabilityIds = null,
		protected ?bool $hasChildren = null,
		protected ?bool $hasActiveChildren = null,
		protected ?int $attributeId = null,
		protected ?string $anyAttributeId = null,
		protected ?string $allAttributeIds = null,
		protected ?int $attributeValueId = null,
		protected ?string $anyAttributeValueId = null,
		protected ?string $allAttributeValueIds = null,
		protected ?string $barcodeCode = null,
		protected ?int $barcodeId = null,
		protected ?string $bundleType = null,
		protected ?int $categoryId = null,
		protected ?string $anyCategoryId = null,
		protected ?string $allCategoryIds = null,
		protected ?string $anyCharacteristicId = null,
		protected ?string $allCharacteristicIds = null,
		protected ?int $clientId = null,
		protected ?string $anyClientId = null,
		protected ?string $allClientIds = null,
		protected ?string $automaticClientVisibilities = null,
		protected float|int|null $imageHasMarketId = null,
		protected ?int $flag1 = null,
		protected ?int $flag2 = null,
		protected ?int $manufacturerId = null,
		protected ?string $anyManufacturerId = null,
		protected ?string $itemType = null,
		protected float|int|null $marketId = null,
		protected ?string $anyMarketId = null,
		protected ?string $referrerIds = null,
		protected ?string $allMarketIds = null,
		protected ?string $priceBetween = null,
		protected ?string $priceBetweenById = null,
		protected ?string $priceCalculationUuid = null,
		protected ?string $salesPriceIds = null,
		protected ?string $anySalesPriceId = null,
		protected ?int $propertySelectionId = null,
		protected ?string $anyPropertySelectionId = null,
		protected ?string $allPropertySelectionIds = null,
		protected ?string $hasNameInLanguage = null,
		protected ?int $bundleComponentVariationId = null,
		protected ?string $warehouseIds = null,
		protected ?int $netStock = null,
		protected ?int $physicalStock = null,
		protected ?string $itemNames = null,
		protected ?string $itemName1 = null,
		protected ?string $itemName2 = null,
		protected ?string $itemName3 = null,
		protected ?string $number = null,
		protected ?string $model = null,
		protected ?string $supplierItemNumber = null,
		protected ?string $lang = null,
		protected ?string $createdAt = null,
		protected ?string $updatedAt = null,
		protected ?string $itemCreatedAt = null,
		protected ?string $itemUpdatedAt = null,
		protected ?string $availabilityUpdatedAt = null,
		protected ?string $stockUpdatedAt = null,
		protected ?string $barcodeUpdatedAt = null,
		protected ?string $categoryUpdatedAt = null,
		protected ?string $clientUpdatedAt = null,
		protected ?string $marketUpdatedAt = null,
		protected ?string $propertyUpdatedAt = null,
		protected ?string $salesPriceUpdatedAt = null,
		protected ?string $supplierUpdatedAt = null,
		protected ?string $tagUpdatedAt = null,
		protected ?string $warehouseUpdatedAt = null,
		protected ?string $relatedUpdatedAt = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?bool $hasLowestPrice = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'sortBy' => $this->sortBy,
			'groupBy' => $this->groupBy,
			'query' => $this->query,
			'ids' => $this->ids,
			'itemId' => $this->itemId,
			'itemIds' => $this->itemIds,
			'isActive' => $this->isActive,
			'isMain' => $this->isMain,
			'isSalable' => $this->isSalable,
			'supplierId' => $this->supplierId,
			'availabilityIds' => $this->availabilityIds,
			'hasChildren' => $this->hasChildren,
			'hasActiveChildren' => $this->hasActiveChildren,
			'attributeId' => $this->attributeId,
			'anyAttributeId' => $this->anyAttributeId,
			'allAttributeIds' => $this->allAttributeIds,
			'attributeValueId' => $this->attributeValueId,
			'anyAttributeValueId' => $this->anyAttributeValueId,
			'allAttributeValueIds' => $this->allAttributeValueIds,
			'barcodeCode' => $this->barcodeCode,
			'barcodeId' => $this->barcodeId,
			'bundleType' => $this->bundleType,
			'categoryId' => $this->categoryId,
			'anyCategoryId' => $this->anyCategoryId,
			'allCategoryIds' => $this->allCategoryIds,
			'anyCharacteristicId' => $this->anyCharacteristicId,
			'allCharacteristicIds' => $this->allCharacteristicIds,
			'clientId' => $this->clientId,
			'anyClientId' => $this->anyClientId,
			'allClientIds' => $this->allClientIds,
			'automaticClientVisibilities' => $this->automaticClientVisibilities,
			'imageHasMarketId' => $this->imageHasMarketId,
			'flag1' => $this->flag1,
			'flag2' => $this->flag2,
			'manufacturerId' => $this->manufacturerId,
			'anyManufacturerId' => $this->anyManufacturerId,
			'itemType' => $this->itemType,
			'marketId' => $this->marketId,
			'anyMarketId' => $this->anyMarketId,
			'referrerIds' => $this->referrerIds,
			'allMarketIds' => $this->allMarketIds,
			'priceBetween' => $this->priceBetween,
			'priceBetweenById' => $this->priceBetweenById,
			'priceCalculationUuid' => $this->priceCalculationUuid,
			'salesPriceIds' => $this->salesPriceIds,
			'anySalesPriceId' => $this->anySalesPriceId,
			'propertySelectionId' => $this->propertySelectionId,
			'anyPropertySelectionId' => $this->anyPropertySelectionId,
			'allPropertySelectionIds' => $this->allPropertySelectionIds,
			'hasNameInLanguage' => $this->hasNameInLanguage,
			'bundleComponentVariationId' => $this->bundleComponentVariationId,
			'warehouseIds' => $this->warehouseIds,
			'netStock' => $this->netStock,
			'physicalStock' => $this->physicalStock,
			'itemNames' => $this->itemNames,
			'itemName1' => $this->itemName1,
			'itemName2' => $this->itemName2,
			'itemName3' => $this->itemName3,
			'number' => $this->number,
			'model' => $this->model,
			'supplierItemNumber' => $this->supplierItemNumber,
			'lang' => $this->lang,
			'createdAt' => $this->createdAt,
			'updatedAt' => $this->updatedAt,
			'itemCreatedAt' => $this->itemCreatedAt,
			'itemUpdatedAt' => $this->itemUpdatedAt,
			'availabilityUpdatedAt' => $this->availabilityUpdatedAt,
			'stockUpdatedAt' => $this->stockUpdatedAt,
			'barcodeUpdatedAt' => $this->barcodeUpdatedAt,
			'categoryUpdatedAt' => $this->categoryUpdatedAt,
			'clientUpdatedAt' => $this->clientUpdatedAt,
			'marketUpdatedAt' => $this->marketUpdatedAt,
			'propertyUpdatedAt' => $this->propertyUpdatedAt,
			'salesPriceUpdatedAt' => $this->salesPriceUpdatedAt,
			'supplierUpdatedAt' => $this->supplierUpdatedAt,
			'tagUpdatedAt' => $this->tagUpdatedAt,
			'warehouseUpdatedAt' => $this->warehouseUpdatedAt,
			'relatedUpdatedAt' => $this->relatedUpdatedAt,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'hasLowestPrice' => $this->hasLowestPrice,
		]);
	}
}
