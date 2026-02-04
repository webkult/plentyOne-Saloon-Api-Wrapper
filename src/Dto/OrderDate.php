<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderDate extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $typeId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
