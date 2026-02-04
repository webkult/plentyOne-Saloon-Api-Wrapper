<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentPolicy extends SpatieData
{
	public function __construct(
		public ?string $paymentPolicyId = null,
		public ?string $description = null,
		public ?bool $immediatePay = null,
		public ?string $marketplaceId = null,
		public ?string $name = null,
		public ?string $paymentInstructions = null,
	) {
	}
}
