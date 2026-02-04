<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationStockCorrection extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public ?int $storageLocationId = null,
		public int|float|null $quantity = null,
		public ?string $bestBeforeDate = null,
		public ?string $batch = null,
		public ?int $reasonId = null,
	) {
	}
}
