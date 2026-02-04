<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemSerialNumber extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $orderItemId = null,
		public ?int $itemId = null,
		public ?string $serialNumber = null,
		public ?string $createdAt = null,
	) {
	}
}
