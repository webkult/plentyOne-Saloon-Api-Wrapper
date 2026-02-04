<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PickingOrderItem extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $pickingOrderId = null,
		public ?int $orderItemId = null,
		public ?string $processState = null,
		public ?string $processDate = null,
		public ?int $processUserId = null,
		public ?string $comment = null,
		public int|float|null $quantity = null,
		public ?int $itemId = null,
		public ?int $holdingArea = null,
		public ?int $warehouseId = null,
		public ?string $orderIdList = null,
	) {
	}
}
