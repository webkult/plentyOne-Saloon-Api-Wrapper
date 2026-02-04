<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderProperty extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $typeId = null,
		public ?string $value = null,
	) {
	}
}
