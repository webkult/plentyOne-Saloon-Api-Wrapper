<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderReturns extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $returnsOrderId = null,
		public ?int $providerId = null,
		public ?string $fileName = null,
		public ?string $externalNumber = null,
		public ?string $externalData = null,
	) {
	}
}
