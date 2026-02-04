<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderSerialNumber extends SpatieData
{
	public function __construct(
		public ?int $serialNumberId = null,
		public ?int $orderId = null,
		public ?int $orderItemId = null,
		public ?string $serialNumber = null,
	) {
	}
}
