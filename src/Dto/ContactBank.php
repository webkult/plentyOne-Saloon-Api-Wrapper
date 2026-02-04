<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactBank extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $contactId = null,
		public ?int $orderId = null,
		public ?string $accountOwner = null,
		public ?string $bankName = null,
		public ?string $bankAddress = null,
		public ?string $bankPostalCodeTown = null,
		public ?string $bankCountry = null,
		public ?string $iban = null,
		public ?string $bic = null,
		public ?string $accountNumber = null,
		public ?string $sortCode = null,
		public ?string $lastUpdateBy = null,
		public ?int $directDebitMandateAvailable = null,
		public ?string $directDebitMandateAt = null,
		public ?string $directDebitMethod = null,
		public ?string $directDebitType = null,
		public ?string $paymentMethod = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
