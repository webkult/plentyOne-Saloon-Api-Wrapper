<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentMethodName extends SpatieData
{
	public function __construct(
		public ?int $paymentMethodId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
