<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderItemDate extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderItemId = null,
		public ?int $typeId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
