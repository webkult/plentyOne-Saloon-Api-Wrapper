<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock movements
 *
 * Lists stock movements for a variation. The ID of the item and the ID of the variation must be
 * specified. To get movements older than 3 months, set the 'year' parameter.
 * NOTE: You can either get
 * archive entries or non-archive entries. You can not get entries for the current year that are
 * younger and older than 3 months with one request. You need separate requests to get entries older
 * and younger than 3 months. To get all entries younger than 3 month you do not need to specify a year
 * or any createdAt parameter.
 */
class ListStockMovements extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/stock/movements";
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 * @param null|int $warehouseId The ID of the warehouse
	 * @param null|string $createdAtFrom Get entries with createdAt date after this date
	 * @param null|string $createdAtTo Get entries with createdAt date before this date
	 * @param null|int $year Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
	 * @param int $page The requested page. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of items per page. The default number per page is 50.
	 * @param null|array $columns The properties to be loaded
	 */
	public function __construct(
		protected int $variationId,
		protected int $id,
		protected int $itemId,
		protected ?int $warehouseId = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?int $year = null,
		protected int $page,
		protected int $itemsPerPage,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'itemId' => $this->itemId,
			'warehouseId' => $this->warehouseId,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'year' => $this->year,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'columns' => $this->columns,
		]);
	}
}
