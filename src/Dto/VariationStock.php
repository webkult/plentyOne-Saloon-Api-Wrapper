<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationStock extends SpatieData
{
	public function __construct(
		public ?int $itemId = null,
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public int|float|null $reservedListing = null,
		public int|float|null $reservedBundles = null,
		public int|float|null $valueOfGoods = null,
		public int|float|null $purchasePrice = null,
		public int|float|null $physicalStock = null,
		public int|float|null $reservedStock = null,
		public int|float|null $netStock = null,
		public int|float|null $reorderLevel = null,
		public int|float|null $deltaReorderLevel = null,
	) {
	}
}
