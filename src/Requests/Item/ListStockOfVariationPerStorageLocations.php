<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock of a variation per storage locations
 *
 * Lists stock of a variation per storage location. The ID of the item and the ID of the variation must
 * be specified.
 */
class ListStockOfVariationPerStorageLocations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/stock/storageLocations";
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 * @param int $page The requested page
	 * @param int $itemsPerPage The number of items per page
	 * @param null|array $columns The properties to be loaded
	 * @param null|string $sortBy The column to be sorted by
	 * @param null|string $sortOrder The sort direction
	 */
	public function __construct(
		protected int $variationId,
		protected int $id,
		protected int $itemId,
		protected int $page,
		protected int $itemsPerPage,
		protected ?array $columns = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'itemId' => $this->itemId,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'columns' => $this->columns,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
		]);
	}
}
