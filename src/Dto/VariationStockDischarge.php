<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationStockDischarge extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public ?int $storageLocationId = null,
		public ?string $deliveredAt = null,
		public ?string $orderNumber = null,
		public ?int $supplierId = null,
		public ?string $currency = null,
		public int|float|null $exchangeRate = null,
		public int|float|null $quantity = null,
		public ?string $bestBeforeDate = null,
		public ?string $batch = null,
		public ?int $reasonId = null,
	) {
	}
}
