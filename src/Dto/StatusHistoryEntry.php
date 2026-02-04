<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class StatusHistoryEntry extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public int|float|null $statusId = null,
		public ?string $createdAt = null,
		public ?int $userId = null,
		public ?string $procedureText = null,
	) {
	}
}
