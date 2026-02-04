<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List variations of an item
 *
 * Lists all variations of an item. The ID of the item must be specified.
 */
class ListVariationsOfItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/variations";
	}


	/**
	 * @param int $itemId
	 * @param null|string $with Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
	 * @param null|string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 * @param null|int $page Limits the results to a specific page. The page number must be specified.
	 * @param null|int $itemsPerPage Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
	 * @param null|bool $isMain Filter restricts the list of results to variations that are main variations.
	 * @param null|bool $isActive Filter restricts the list of results to variations that are active.
	 * @param null|string $barcode Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
	 * @param null|string $numberExact Filter restricts the list of results to the variation with the variation number specified.
	 * @param null|string $numberFuzzy Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
	 * @param null|bool $isBundle Filter restricts the list of results to variations to which variations were added to create a bundle.
	 * @param null|string $supplierNumber Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
	 * @param null|int $manufacturerId Filter restricts the list of results to variations with the specified manufacturer ID.
	 * @param null|string $updatedBetween Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param null|string $createdBetween Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
	 * @param null|string $relatedUpdatedBetween Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
	 */
	public function __construct(
		protected int $itemId,
		protected ?string $with = null,
		protected ?string $lang = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?bool $isMain = null,
		protected ?bool $isActive = null,
		protected ?string $barcode = null,
		protected ?string $numberExact = null,
		protected ?string $numberFuzzy = null,
		protected ?bool $isBundle = null,
		protected ?string $supplierNumber = null,
		protected ?int $manufacturerId = null,
		protected ?string $updatedBetween = null,
		protected ?string $createdBetween = null,
		protected ?string $relatedUpdatedBetween = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'lang' => $this->lang,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'isMain' => $this->isMain,
			'isActive' => $this->isActive,
			'barcode' => $this->barcode,
			'numberExact' => $this->numberExact,
			'numberFuzzy' => $this->numberFuzzy,
			'isBundle' => $this->isBundle,
			'supplierNumber' => $this->supplierNumber,
			'manufacturerId' => $this->manufacturerId,
			'updatedBetween' => $this->updatedBetween,
			'createdBetween' => $this->createdBetween,
			'relatedUpdatedBetween' => $this->relatedUpdatedBetween,
		]);
	}
}
