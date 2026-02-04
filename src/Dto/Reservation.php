<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Reservation extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $initialId = null,
		public ?string $transactionId = null,
		public ?int $variationId = null,
		public ?int $warehouseId = null,
		public ?int $storageLocationId = null,
		public ?string $batch = null,
		public int|float|null $difference = null,
		public ?string $reason = null,
		public ?int $priority = null,
		public ?bool $mayBecomePending = null,
		public ?int $timeToLive = null,
	) {
	}
}
