<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Warehouse\CreateMultipleStorageLocationDimensions;
use PlentyOne\Api\Requests\Warehouse\CreateNewWarehouse;
use PlentyOne\Api\Requests\Warehouse\CreateStorageLocation;
use PlentyOne\Api\Requests\Warehouse\CreateStorageLocationDimension;
use PlentyOne\Api\Requests\Warehouse\CreateStorageLocationInventory;
use PlentyOne\Api\Requests\Warehouse\CreateStorageLocationLayout;
use PlentyOne\Api\Requests\Warehouse\CreateStorageLocationLevel;
use PlentyOne\Api\Requests\Warehouse\DeleteMultipleStorageLocations;
use PlentyOne\Api\Requests\Warehouse\DeleteStorageLocation;
use PlentyOne\Api\Requests\Warehouse\DeleteStorageLocationDimension;
use PlentyOne\Api\Requests\Warehouse\DeleteStorageLocationLevel;
use PlentyOne\Api\Requests\Warehouse\DeleteWarehouse;
use PlentyOne\Api\Requests\Warehouse\EditThePurposeAndStatusForGroupOfStorageLocations;
use PlentyOne\Api\Requests\Warehouse\GenerateStorageLocationPreviewAndSavesIt;
use PlentyOne\Api\Requests\Warehouse\GenerateTheStorageLocationLabel;
use PlentyOne\Api\Requests\Warehouse\GetAvailabilityForStorageLocation;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocation;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationDetails;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationDimension;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationInventory;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationLevel;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationListOfInventories;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationStructure;
use PlentyOne\Api\Requests\Warehouse\GetStorageLocationStructureMoving;
use PlentyOne\Api\Requests\Warehouse\ListStorageLocationDimensions;
use PlentyOne\Api\Requests\Warehouse\ListStorageLocationLevels;
use PlentyOne\Api\Requests\Warehouse\ListStorageLocations;
use PlentyOne\Api\Requests\Warehouse\ListStorageLocationsByLevelId;
use PlentyOne\Api\Requests\Warehouse\ListStorageLocationsStock;
use PlentyOne\Api\Requests\Warehouse\ListWarehouses;
use PlentyOne\Api\Requests\Warehouse\MoveStorageLocationLevelPosition;
use PlentyOne\Api\Requests\Warehouse\MoveStorageLocationPosition;
use PlentyOne\Api\Requests\Warehouse\UpdateExistingWarehouse;
use PlentyOne\Api\Requests\Warehouse\UpdateStorageLocation;
use PlentyOne\Api\Requests\Warehouse\UpdateStorageLocationDimension;
use PlentyOne\Api\Requests\Warehouse\UpdateStorageLocationLevel;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Warehouse extends BaseResource
{
	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'repairWarehouse' = Associated repair warehouse.</li><li>'storageLocations' = The storage locations of the warehouse.</li><li>'dimensions' = The dimensions of the warehouse</li></ul>
	 * @param int $id The ID of the warehouse. Allowed operators: `eq`, `not`, `in`, `nin`
	 * @param string $name The name of the warehouse. Allowed operators: `eq`, `not`, `in`, `nin`, `like`
	 * @param int $priority The priority of the warehouse. Allowed operators: `eq`, `not`, `in`, `nin`, `lt`, `lte`, `gt`, `gte`, `between`
	 */
	public function listWarehouses(
		?string $with = null,
		?int $id = null,
		?string $name = null,
		?int $priority = null,
	): Response
	{
		return $this->connector->send(new ListWarehouses($with, $id, $name, $priority));
	}


	public function createNewWarehouse(): Response
	{
		return $this->connector->send(new CreateNewWarehouse());
	}


	/**
	 * @param int $parentId The parent ID of the storage location dimension
	 * @param int $warehouseId The warehouse ID of the storage location dimension
	 * @param int $level The level of the storage location dimension
	 * @param string $name The name of the storage location dimension
	 * @param string $shortcut The shortcut of the storage location dimension
	 * @param string $separator The separator of the storage location dimension
	 * @param int $isActiveForPickupPath Active flag for pickup path of the storage location dimension
	 * @param int $dimensionId The storage location dimension ID of the storage location level
	 * @param int $position The position of the storage location level
	 * @param int $levelId The storage location level ID of the storage location
	 * @param string $label The label of the storage location
	 * @param string $purposeKey The location type key of the storage location
	 * @param string $statusKey The location status key of the storage location
	 */
	public function createStorageLocationLayout(
		int $parentId,
		int $warehouseId,
		int $level,
		string $name,
		string $shortcut,
		string $separator,
		int $isActiveForPickupPath,
		int $dimensionId,
		int $position,
		int $levelId,
		string $label,
		string $purposeKey,
		string $statusKey,
	): Response
	{
		return $this->connector->send(new CreateStorageLocationLayout($parentId, $warehouseId, $level, $name, $shortcut, $separator, $isActiveForPickupPath, $dimensionId, $position, $levelId, $label, $purposeKey, $statusKey));
	}


	public function listStorageLocations(): Response
	{
		return $this->connector->send(new ListStorageLocations());
	}


	/**
	 * @param int $levelId The storage location level ID of the storage location
	 * @param string $label The label of the storage location
	 * @param string $purposeKey The location type key of the storage location
	 * @param string $statusKey The location status key of the storage location
	 * @param int $position The position of the storage location
	 */
	public function createStorageLocation(
		int $levelId,
		string $label,
		string $purposeKey,
		string $statusKey,
		int $position,
	): Response
	{
		return $this->connector->send(new CreateStorageLocation($levelId, $label, $purposeKey, $statusKey, $position));
	}


	/**
	 * @param array $warehouseLocationIds An array containing all the ID's for the storage locations that need to be deleted
	 */
	public function deleteMultipleStorageLocations(array $warehouseLocationIds): Response
	{
		return $this->connector->send(new DeleteMultipleStorageLocations($warehouseLocationIds));
	}


	/**
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function getAvailabilityForStorageLocation(int $warehouseLocationId): Response
	{
		return $this->connector->send(new GetAvailabilityForStorageLocation($warehouseLocationId));
	}


	public function getStorageLocationDetails(): Response
	{
		return $this->connector->send(new GetStorageLocationDetails());
	}


	/**
	 * @param int $parentId The parent ID of the storage location dimension
	 * @param int $warehouseId The warehouse ID of the storage location dimension
	 * @param int $level The level of the storage location dimension
	 * @param string $name The name of the storage location dimension
	 * @param string $shortcut The shortcut of the storage location dimension
	 * @param string $separator The separator of the storage location dimension
	 * @param int $isActiveForPickupPath Active flag for pickup path of the storage location dimension
	 */
	public function createStorageLocationDimension(
		int $parentId,
		int $warehouseId,
		int $level,
		string $name,
		string $shortcut,
		string $separator,
		int $isActiveForPickupPath,
	): Response
	{
		return $this->connector->send(new CreateStorageLocationDimension($parentId, $warehouseId, $level, $name, $shortcut, $separator, $isActiveForPickupPath));
	}


	/**
	 * @param int $warehouseLocationDimensionId The ID of the storage location dimension
	 */
	public function getStorageLocationDimension(int $warehouseLocationDimensionId): Response
	{
		return $this->connector->send(new GetStorageLocationDimension($warehouseLocationDimensionId));
	}


	/**
	 * @param int $warehouseLocationDimensionId The ID of the storage location dimension
	 * @param string $name The name of the storage location dimension
	 * @param bool $displayInName The display in name flag of the storage location dimension
	 * @param string $shortcut The shortcut of the storage location dimension
	 * @param string $separator The separator of the storage location dimension
	 * @param bool $isActiveForPickupPath Active flag for pickup path of the storage location dimension
	 */
	public function updateStorageLocationDimension(
		int $warehouseLocationDimensionId,
		?string $name = null,
		?bool $displayInName = null,
		?string $shortcut = null,
		?string $separator = null,
		?bool $isActiveForPickupPath = null,
	): Response
	{
		return $this->connector->send(new UpdateStorageLocationDimension($warehouseLocationDimensionId, $name, $displayInName, $shortcut, $separator, $isActiveForPickupPath));
	}


	/**
	 * @param int $warehouseLocationDimensionId The ID of the storage location dimension
	 */
	public function deleteStorageLocationDimension(int $warehouseLocationDimensionId): Response
	{
		return $this->connector->send(new DeleteStorageLocationDimension($warehouseLocationDimensionId));
	}


	/**
	 * @param string $purpose The purpose key value for storage location purposeKey field
	 * @param string $status The status key value for storage location status field
	 */
	public function editThePurposeAndStatusForGroupOfStorageLocations(string $purpose, string $status): Response
	{
		return $this->connector->send(new EditThePurposeAndStatusForGroupOfStorageLocations($purpose, $status));
	}


	/**
	 * @param int $status The storage location inventory status
	 */
	public function createStorageLocationInventory(int $status): Response
	{
		return $this->connector->send(new CreateStorageLocationInventory($status));
	}


	public function getStorageLocationListOfInventories(): Response
	{
		return $this->connector->send(new GetStorageLocationListOfInventories());
	}


	/**
	 * @param int $warehouseLocationInventoryId
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function getStorageLocationInventory(int $warehouseLocationInventoryId, int $warehouseLocationId): Response
	{
		return $this->connector->send(new GetStorageLocationInventory($warehouseLocationInventoryId, $warehouseLocationId));
	}


	/**
	 * @param int $parentId The parent ID of the storage location level
	 * @param int $dimensionId The storage location dimension ID of the storage location level
	 * @param int $position The position of the storage location level
	 * @param string $name The name of the storage location level
	 */
	public function createStorageLocationLevel(int $parentId, int $dimensionId, int $position, string $name): Response
	{
		return $this->connector->send(new CreateStorageLocationLevel($parentId, $dimensionId, $position, $name));
	}


	/**
	 * @param int $toMove The storage location level ID that needs needs to be moved
	 * @param int $target The storage location level ID that stands as position for the storage location level that needs to be moved
	 * @param string $side The actual position from the left or right side of target
	 */
	public function moveStorageLocationLevelPosition(int $toMove, int $target, string $side): Response
	{
		return $this->connector->send(new MoveStorageLocationLevelPosition($toMove, $target, $side));
	}


	/**
	 * @param int $warehouseLocationLevelId The ID of the storage location level
	 */
	public function getStorageLocationLevel(int $warehouseLocationLevelId): Response
	{
		return $this->connector->send(new GetStorageLocationLevel($warehouseLocationLevelId));
	}


	/**
	 * @param int $warehouseLocationLevelId The ID of the storage location level
	 */
	public function updateStorageLocationLevel(int $warehouseLocationLevelId): Response
	{
		return $this->connector->send(new UpdateStorageLocationLevel($warehouseLocationLevelId));
	}


	/**
	 * @param int $warehouseLocationLevelId The ID of the storage location level
	 */
	public function deleteStorageLocationLevel(int $warehouseLocationLevelId): Response
	{
		return $this->connector->send(new DeleteStorageLocationLevel($warehouseLocationLevelId));
	}


	/**
	 * @param array $dimensions The dimensions array that contains data for creating multiple dimensions
	 */
	public function createMultipleStorageLocationDimensions(array $dimensions): Response
	{
		return $this->connector->send(new CreateMultipleStorageLocationDimensions($dimensions));
	}


	/**
	 * @param int $toMove The storage location ID that needs needs to be moved
	 * @param int $target The storage location ID that stands as position for the storage location that needs to be moved
	 * @param string $side The actual position from the left or right side of target
	 */
	public function moveStorageLocationPosition(int $toMove, int $target, string $side): Response
	{
		return $this->connector->send(new MoveStorageLocationPosition($toMove, $target, $side));
	}


	/**
	 * @param array $dimensions The storage location dimensions used by the generator
	 * @param array $storageLocationData The storage location data used by the generator
	 * @param array $levelData The storage location level data used by the generator
	 * @param int $save The save parameter that triggers the preview method or the process save method
	 */
	public function generateStorageLocationPreviewAndSavesIt(
		array $dimensions,
		array $storageLocationData,
		array $levelData,
		int $save,
	): Response
	{
		return $this->connector->send(new GenerateStorageLocationPreviewAndSavesIt($dimensions, $storageLocationData, $levelData, $save));
	}


	/**
	 * @param int $warehouseLocationId
	 * @param int $warehouseLocationId The ID of the warehouse
	 */
	public function listStorageLocationsStock(int $warehouseLocationId): Response
	{
		return $this->connector->send(new ListStorageLocationsStock($warehouseLocationId, $warehouseLocationId));
	}


	/**
	 * @param int $warehouseId The actual warehouse ID
	 * @param string $warehouseLocationIds A string with all storage location ID's for which a label needs to be generated
	 */
	public function generateTheStorageLocationLabel(int $warehouseId, string $warehouseLocationIds): Response
	{
		return $this->connector->send(new GenerateTheStorageLocationLabel($warehouseId, $warehouseLocationIds));
	}


	/**
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function getStorageLocation(int $warehouseLocationId): Response
	{
		return $this->connector->send(new GetStorageLocation($warehouseLocationId));
	}


	/**
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function updateStorageLocation(int $warehouseLocationId): Response
	{
		return $this->connector->send(new UpdateStorageLocation($warehouseLocationId));
	}


	/**
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function deleteStorageLocation(int $warehouseLocationId): Response
	{
		return $this->connector->send(new DeleteStorageLocation($warehouseLocationId));
	}


	/**
	 * @param int $warehouseId The actual warehouse ID
	 */
	public function getStorageLocationStructure(int $warehouseId): Response
	{
		return $this->connector->send(new GetStorageLocationStructure($warehouseId));
	}


	/**
	 * @param int $warehouseId The actual warehouse ID
	 */
	public function getStorageLocationStructureMoving(int $warehouseId): Response
	{
		return $this->connector->send(new GetStorageLocationStructureMoving($warehouseId));
	}


	/**
	 * @param int $id The ID of the warehouse
	 */
	public function updateExistingWarehouse(int $id): Response
	{
		return $this->connector->send(new UpdateExistingWarehouse($id));
	}


	/**
	 * @param int $id The ID of the warehouse
	 * @param int $newWarehouseId The ID of the warehouse to which the orders should be transferred
	 */
	public function deleteWarehouse(int $id, ?int $newWarehouseId = null): Response
	{
		return $this->connector->send(new DeleteWarehouse($id, $newWarehouseId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $warehouseId The ID of the warehouse
	 */
	public function listStorageLocationsDuplicate1(int $warehouseId): Response
	{
		return $this->connector->send(new ListStorageLocations($warehouseId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 */
	public function listStorageLocationDimensions(int $warehouseId): Response
	{
		return $this->connector->send(new ListStorageLocationDimensions($warehouseId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 * @param int $warehouseLocationLevelId
	 * @param int $levelId The ID of the storage location level
	 */
	public function listStorageLocationsByLevelId(
		int $warehouseId,
		int $warehouseLocationLevelId,
		int $levelId,
	): Response
	{
		return $this->connector->send(new ListStorageLocationsByLevelId($warehouseId, $warehouseLocationLevelId, $levelId));
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 */
	public function listStorageLocationLevels(int $warehouseId): Response
	{
		return $this->connector->send(new ListStorageLocationLevels($warehouseId));
	}
}
