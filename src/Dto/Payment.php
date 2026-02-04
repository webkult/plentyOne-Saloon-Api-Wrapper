<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Payment extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public int|float|null $amount = null,
		public int|float|null $exchangeRatio = null,
		public ?int $parentId = null,
		public ?int $deleted = null,
		public ?int $unaccountable = null,
		public ?string $currency = null,
		public ?string $type = null,
		public ?string $hash = null,
		public ?int $origin = null,
		public ?string $receivedAt = null,
		public ?string $importedAt = null,
		public ?int $status = null,
		public ?int $transactionType = null,
		public ?int $mopId = null,
		public ?bool $regenerateHash = null,
		public ?bool $updateOrderPaymentStatus = null,
		public ?bool $isSystemCurrency = null,
	) {
	}
}
