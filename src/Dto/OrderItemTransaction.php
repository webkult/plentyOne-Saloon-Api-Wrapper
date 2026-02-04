<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderItemTransaction extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderItemId = null,
		public int|float|null $quantity = null,
		public ?int $userId = null,
		public ?string $identification = null,
		public ?string $direction = null,
		public ?string $status = null,
		public ?int $receiptId = null,
		public ?int $warehouseLocationId = null,
		public ?string $batch = null,
		public ?string $bestBeforeDate = null,
		public ?int $batchBestBeforeDateId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
