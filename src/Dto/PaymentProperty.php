<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentProperty extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $paymentId = null,
		public ?int $typeId = null,
		public ?string $value = null,
	) {
	}
}
