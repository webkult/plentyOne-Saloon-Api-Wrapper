<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentOrderRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $paymentId = null,
		public ?int $orderId = null,
		public ?string $assignedAt = null,
	) {
	}
}
