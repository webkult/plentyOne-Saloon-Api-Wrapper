<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationStockMovement extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $itemId = null,
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public ?string $reasonString = null,
		public ?string $attributeValues = null,
		public ?int $processRowId = null,
		public ?int $quantity = null,
		public ?int $reason = null,
		public ?string $createdAt = null,
		public ?int $processRowType = null,
		public ?string $bestBeforeDate = null,
		public ?string $batch = null,
		public ?string $storageLocationName = null,
		public ?string $warehouseName = null,
		public ?int $purchasePrice = null,
		public ?int $userId = null,
	) {
	}
}
