<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\StockManagement\BookIncomingStock;
use PlentyOne\Api\Requests\StockManagement\BookOutgoingStock;
use PlentyOne\Api\Requests\StockManagement\BookStocktaking;
use PlentyOne\Api\Requests\StockManagement\CorrectStock;
use PlentyOne\Api\Requests\StockManagement\CreateWarehouse;
use PlentyOne\Api\Requests\StockManagement\GetStorageLocation;
use PlentyOne\Api\Requests\StockManagement\GetWarehouse;
use PlentyOne\Api\Requests\StockManagement\ListArchiveYearsOfStockMovements;
use PlentyOne\Api\Requests\StockManagement\ListStock;
use PlentyOne\Api\Requests\StockManagement\ListStockByWarehouse;
use PlentyOne\Api\Requests\StockManagement\ListStockByWarehouseType;
use PlentyOne\Api\Requests\StockManagement\ListStockMovements;
use PlentyOne\Api\Requests\StockManagement\ListStockOfWarehousePerStorageLocation;
use PlentyOne\Api\Requests\StockManagement\ListStockOfWarehousePerStorageLocationWithPimEntry;
use PlentyOne\Api\Requests\StockManagement\ListWarehouses;
use PlentyOne\Api\Requests\StockManagement\RedistributeStock;
use PlentyOne\Api\Requests\StockManagement\UnpackVariation;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class StockManagement extends BaseResource
{
	/**
	 * @param string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $variationId Filter that restricts the search result to stock with a variation. The id of the variation must be specified.
	 * @param int $page The requested page.
	 * @param int $itemsPerPage The number of items per page.
	 * @param array $columns The properties to be loaded.
	 */
	public function listStock(
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?int $variationId = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new ListStock($updatedAtFrom, $updatedAtTo, $variationId, $page, $itemsPerPage, $columns));
	}


	public function listArchiveYearsOfStockMovements(): Response
	{
		return $this->connector->send(new ListArchiveYearsOfStockMovements());
	}


	public function redistributeStock(): Response
	{
		return $this->connector->send(new RedistributeStock());
	}


	/**
	 * @param string $type The name of the warehouse type. Currently only 'sales' is available.
	 * @param int $page The requested page.
	 * @param int $itemsPerPage The number of items per page.
	 * @param array $columns The properties to be loaded.
	 * @param string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $variationId Filter that restricts the search result to stock with a variation. The id of the variation must be specified.
	 */
	public function listStockByWarehouseType(
		string $type,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $columns = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?int $variationId = null,
	): Response
	{
		return $this->connector->send(new ListStockByWarehouseType($type, $page, $itemsPerPage, $columns, $updatedAtFrom, $updatedAtTo, $variationId));
	}


	/**
	 * @param array $with Related objects to be loaded. repairWarehouse is the only relation currently available.
	 */
	public function listWarehouses(?array $with = null): Response
	{
		return $this->connector->send(new ListWarehouses($with));
	}


	public function createWarehouse(): Response
	{
		return $this->connector->send(new CreateWarehouse());
	}


	/**
	 * @param int $warehouseId The id of the warehouse to be loaded
	 * @param array $with Related objects to be loaded. 'repairWarehouse' is the only relation currently available.
	 */
	public function getWarehouse(int $warehouseId, ?array $with = null): Response
	{
		return $this->connector->send(new GetWarehouse($warehouseId, $with));
	}


	/**
	 * @param int $warehouseId The id of the warehouse.
	 * @param int $storageLocationId The id of the storage location.
	 * @param array $columns The attributes to be loaded.
	 * @param array $with The relations to be loaded. Possible values are 'warehouse', 'rack' and 'shelf'.
	 */
	public function getStorageLocation(
		int $warehouseId,
		int $storageLocationId,
		?array $columns = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new GetStorageLocation($warehouseId, $storageLocationId, $columns, $with));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 * @param string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $variationId Filter that restricts the search result to stock with a variation. The id of the variation must be specified.
	 * @param int $page The requested page.
	 * @param int $itemsPerPage The number of items per page.
	 * @param array $columns The properties to be loaded.
	 * @param int $reasonId The ID of the reason
	 */
	public function listStockByWarehouse(
		int $warehouseId,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?int $variationId = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $columns = null,
		?int $reasonId = null,
	): Response
	{
		return $this->connector->send(new ListStockByWarehouse($warehouseId, $updatedAtFrom, $updatedAtTo, $variationId, $page, $itemsPerPage, $columns, $reasonId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 */
	public function bookIncomingStock(int $warehouseId): Response
	{
		return $this->connector->send(new BookIncomingStock($warehouseId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 */
	public function bookOutgoingStock(int $warehouseId): Response
	{
		return $this->connector->send(new BookOutgoingStock($warehouseId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 */
	public function correctStock(int $warehouseId): Response
	{
		return $this->connector->send(new CorrectStock($warehouseId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 * @param int $variationId The ID of the variation
	 * @param int $reasonGroup The ID of the reason
	 * @param int $itemId The ID of the item
	 * @param string $createdAtFrom Get entries with createdAt date after this date
	 * @param string $createdAtTo Get entries with createdAt date before this date
	 * @param int $year Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
	 * @param int $page The requested page. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of items per page. The default number per page is 50.
	 * @param array $columns The properties to be loaded
	 * @param int $processRowType The type of the process, 2=order
	 * @param int $orderId The id of the order
	 */
	public function listStockMovements(
		int $warehouseId,
		?int $variationId = null,
		?int $reasonGroup = null,
		?int $itemId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?int $year = null,
		int $page,
		int $itemsPerPage,
		?array $columns = null,
		?int $processRowType = null,
		?int $orderId = null,
	): Response
	{
		return $this->connector->send(new ListStockMovements($warehouseId, $variationId, $reasonGroup, $itemId, $createdAtFrom, $createdAtTo, $year, $page, $itemsPerPage, $columns, $processRowType, $orderId));
	}


	/**
	 * @param int $warehouseId
	 * @param string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $variationId Filter that restricts the search result to stock with a variation.
	 * @param int $storageLocationId Filter that restricts the search result to stock of a storage location.
	 * @param int $page The requested page.
	 * @param int $itemsPerPage The number of items per page.
	 * @param array $columns The properties to be loaded.
	 * @param array $with Load additional relations for a StockStorageLocation. Possible values:
	 *     <ul>
	 *     <li>'storageLocation' = The storageLocation this stock information belongs to.</li>
	 *     </ul>
	 *     Example: <code>?with[]=storageLocation</code>
	 */
	public function listStockOfWarehousePerStorageLocation(
		int $warehouseId,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?int $variationId = null,
		?int $storageLocationId = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $columns = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListStockOfWarehousePerStorageLocation($warehouseId, $updatedAtFrom, $updatedAtTo, $variationId, $storageLocationId, $page, $itemsPerPage, $columns, $with));
	}


	/**
	 * @param int $warehouseId
	 * @param string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $variationId Filter that restricts the search result to stock with a variation.
	 * @param int $storageLocationId Filter that restricts the search result to stock of a storage location.
	 * @param int $page The requested page.
	 * @param int $itemsPerPage The number of items per page.
	 * @param array $columns The properties to be loaded.
	 * @param array $with Load additional relations for a StockStorageLocation. Possible values:
	 *     <ul>
	 *     <li>'storageLocation' = The storageLocation this stock information belongs to.</li>
	 *     </ul>
	 *     Example: <code>?with[]=warehouseLocation</code>
	 */
	public function listStockOfWarehousePerStorageLocationWithPimEntry(
		int $warehouseId,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?int $variationId = null,
		?int $storageLocationId = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $columns = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListStockOfWarehousePerStorageLocationWithPimEntry($warehouseId, $updatedAtFrom, $updatedAtTo, $variationId, $storageLocationId, $page, $itemsPerPage, $columns, $with));
	}


	/**
	 * @param int $warehouseId
	 * @param array $variationStockIntake The new item that will be booked in as result of the unpacking
	 * @param array $variationStockCorrection The item that is unpacked
	 */
	public function unpackVariation(
		int $warehouseId,
		array $variationStockIntake,
		array $variationStockCorrection,
	): Response
	{
		return $this->connector->send(new UnpackVariation($warehouseId, $variationStockIntake, $variationStockCorrection));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 * @param int $warehouseLocationId
	 * @param int $warehouseLocationId The ID of the warehouseLocation.
	 */
	public function bookStocktaking(int $warehouseId, int $warehouseLocationId): Response
	{
		return $this->connector->send(new BookStocktaking($warehouseId, $warehouseLocationId, $warehouseLocationId));
	}
}
