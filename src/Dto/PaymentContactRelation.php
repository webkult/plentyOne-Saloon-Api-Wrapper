<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentContactRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $paymentId = null,
		public ?int $contactId = null,
		public ?string $assignedAt = null,
	) {
	}
}
