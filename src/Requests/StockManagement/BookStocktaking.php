<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Book stocktaking
 *
 * Corrects stock of a storage location. Every variation that is currently present on the provided
 * storageLocation and is not provided
 * in the request will be set to quantity 0.
 */
class BookStocktaking extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/{$this->warehouseLocationId}/stock/bookStocktaking";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 * @param int $warehouseLocationId
	 * @param int $warehouseLocationId The ID of the warehouseLocation.
	 */
	public function __construct(
		protected int $warehouseId,
		protected int $warehouseLocationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$warehouseLocationId' => $this->warehouseLocationId]);
	}
}
