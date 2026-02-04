<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search item
 *
 * Searches for an item.
 */
class SearchItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items";
	}


	/**
	 * @param null|string $with Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
	 * @param null|string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 * @param null|int $page Limits the results to a specific page. The page number must be specified.
	 * @param null|int $itemsPerPage Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
	 * @param null|string $name Filter restricts the list of results to items with the specified item name. An item name must be specified.
	 * @param null|string $manufacturerId Filter restricts the list of results to items with the specified manufacturerId.
	 * @param null|int $id Filter restricts the list of results to items with the specified ID. More than one ID should be separated by commas.
	 * @param null|int $flagOne Filter restricts the list of results to items with the specified flagOne.
	 * @param null|int $flagTwo Filter restricts the list of results to items with the specified flagTwo.
	 * @param null|string $updatedBetween Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param null|string $variationUpdatedBetween Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param null|string $variationRelatedUpdatedBetween Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
	 * @param null|string $or Filters can be defined in this param to link them via OR instead of AND. The syntax looks like the following: or=(updatedBetween=1573050718&varitionUpdatedBetween=1573050718). Everything in the brackets is written in the normal URL-Syntax. The or-param can be used multiple times if it is used like this: or[]=(...)&or[]=(...)
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $lang = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $name = null,
		protected ?string $manufacturerId = null,
		protected ?int $id = null,
		protected ?int $flagOne = null,
		protected ?int $flagTwo = null,
		protected ?string $updatedBetween = null,
		protected ?string $variationUpdatedBetween = null,
		protected ?string $variationRelatedUpdatedBetween = null,
		protected ?string $or = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'lang' => $this->lang,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'name' => $this->name,
			'manufacturerId' => $this->manufacturerId,
			'id' => $this->id,
			'flagOne' => $this->flagOne,
			'flagTwo' => $this->flagTwo,
			'updatedBetween' => $this->updatedBetween,
			'variationUpdatedBetween' => $this->variationUpdatedBetween,
			'variationRelatedUpdatedBetween' => $this->variationRelatedUpdatedBetween,
			'or' => $this->or,
		]);
	}
}
