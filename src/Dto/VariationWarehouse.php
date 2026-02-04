<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationWarehouse extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public ?int $warehouseZoneId = null,
		public ?string $storageLocationType = null,
		public ?int $reorderLevel = null,
		public ?int $maximumStock = null,
		public ?int $stockTurnoverInDays = null,
		public ?int $storageLocation = null,
		public ?int $stockBuffer = null,
		public ?bool $isBatch = null,
		public ?bool $isBestBeforeDate = null,
		public ?string $lastUpdateTimestamp = null,
		public ?string $createdAt = null,
	) {
	}
}
