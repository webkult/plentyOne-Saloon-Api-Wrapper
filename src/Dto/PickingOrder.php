<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PickingOrder extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $createdAt = null,
		public ?string $processDate = null,
		public ?string $doneDate = null,
		public ?int $ownerId = null,
		public ?int $processUserId = null,
		public ?string $processState = null,
		public ?int $webstoreId = null,
		public ?int $warehouseId = null,
		public ?string $comment = null,
		public ?array $filterOptions = null,
	) {
	}
}
