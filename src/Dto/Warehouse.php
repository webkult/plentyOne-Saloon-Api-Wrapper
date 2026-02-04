<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Warehouse extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $note = null,
		public ?int $typeId = null,
		public ?int $priority = null,
		public ?array $allocationReferrerIds = null,
		public ?int $onStockAvailability = null,
		public ?int $outOfStockAvailability = null,
		public ?bool $splitByShippingProfile = null,
		public ?string $storageLocationType = null,
		public ?int $storageLocationZone = null,
		public ?int $repairWarehouseId = null,
		public ?bool $isInventoryModeActive = null,
		public ?string $logisticsType = null,
		public ?string $updatedAt = null,
		public ?string $createdAt = null,
	) {
	}
}
