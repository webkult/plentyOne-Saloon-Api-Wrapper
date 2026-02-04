<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Stock extends SpatieData
{
	public function __construct(
		public ?int $itemId = null,
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public int|float|null $stockPhysical = null,
		public int|float|null $reservedStock = null,
		public int|float|null $reservedEbay = null,
		public int|float|null $reorderDelta = null,
		public int|float|null $stockNet = null,
		public ?int $reordered = null,
		public ?int $warehousePriority = null,
		public int|float|null $reservedBundle = null,
		public int|float|null $averagePurchasePrice = null,
		public int|float|null $averageSale = null,
		public ?string $updatedAt = null,
	) {
	}
}
