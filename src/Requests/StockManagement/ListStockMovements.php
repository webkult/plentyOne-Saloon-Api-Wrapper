<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock movements
 *
 * Lists stock movements for a warehouse. The ID of the warehouse must be specified. To get movements
 * older than 3 months, set the 'year' parameter.
 * NOTE: You can either get archive entries or
 * non-archive entries. You can not get entries for the current year that are younger and older than 3
 * months with one request. You need separate requests to get entries older and younger than 3 months.
 * To get all entries younger than 3 month you do not need to specify a year or any createdAt
 * parameter.
 */
class ListStockMovements extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/stock/movements";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 * @param null|int $variationId The ID of the variation
	 * @param null|int $reasonGroup The ID of the reason
	 * @param null|int $itemId The ID of the item
	 * @param null|string $createdAtFrom Get entries with createdAt date after this date
	 * @param null|string $createdAtTo Get entries with createdAt date before this date
	 * @param null|int $year Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
	 * @param int $page The requested page. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of items per page. The default number per page is 50.
	 * @param null|array $columns The properties to be loaded
	 * @param null|int $processRowType The type of the process, 2=order
	 * @param null|int $orderId The id of the order
	 */
	public function __construct(
		protected int $warehouseId,
		protected ?int $variationId = null,
		protected ?int $reasonGroup = null,
		protected ?int $itemId = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?int $year = null,
		protected int $page,
		protected int $itemsPerPage,
		protected ?array $columns = null,
		protected ?int $processRowType = null,
		protected ?int $orderId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'variationId' => $this->variationId,
			'reasonGroup' => $this->reasonGroup,
			'itemId' => $this->itemId,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'year' => $this->year,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'columns' => $this->columns,
			'processRowType' => $this->processRowType,
			'orderId' => $this->orderId,
		]);
	}
}
