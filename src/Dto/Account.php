<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Account extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $number = null,
		public ?string $companyName = null,
		public ?string $taxIdNumber = null,
		public ?int $valuta = null,
		public ?int $discountDays = null,
		public int|float|null $discountPercent = null,
		public ?int $timeForPaymentAllowedDays = null,
		public ?int $salesRepresentativeContactId = null,
		public ?int $userId = null,
		public ?int $deliveryTime = null,
		public int|float|null $dealerMinOrderValue = null,
		public ?string $supplierCurrency = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
