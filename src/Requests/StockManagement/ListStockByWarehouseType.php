<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock by warehouse type
 *
 * Lists stock for all warehouses of the same warehouse type. The name of the type must be specified.
 * Currently the only type available is 'sales'.
 */
class ListStockByWarehouseType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/stock/types/{$this->type}";
	}


	/**
	 * @param string $type The name of the warehouse type. Currently only 'sales' is available.
	 * @param null|int $page The requested page.
	 * @param null|int $itemsPerPage The number of items per page.
	 * @param null|array $columns The properties to be loaded.
	 * @param null|string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|int $variationId Filter that restricts the search result to stock with a variation. The id of the variation must be specified.
	 */
	public function __construct(
		protected string $type,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $columns = null,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?int $variationId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'columns' => $this->columns,
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'variationId' => $this->variationId,
		]);
	}
}
