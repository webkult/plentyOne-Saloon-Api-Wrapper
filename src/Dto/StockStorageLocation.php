<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class StockStorageLocation extends SpatieData
{
	public function __construct(
		public ?int $itemId = null,
		public ?int $variationId = null,
		public ?int $storageLocationId = null,
		public ?int $warehouseId = null,
		public int|float|null $quantity = null,
		public ?string $bestBeforeDate = null,
		public ?string $batch = null,
		public ?string $updatedAt = null,
	) {
	}
}
