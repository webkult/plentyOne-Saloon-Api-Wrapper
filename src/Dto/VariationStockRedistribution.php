<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationStockRedistribution extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $reasonId = null,
		public int|float|null $quantity = null,
		public ?string $bestBeforeDate = null,
		public ?string $batch = null,
		public ?int $currentStorageLocationId = null,
		public ?int $currentWarehouseId = null,
		public ?int $newStorageLocationId = null,
		public ?int $newWarehouseId = null,
	) {
	}
}
