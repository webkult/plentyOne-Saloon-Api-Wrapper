<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesPriceAccount extends SpatieData
{
	public function __construct(
		public ?int $salesPriceId = null,
		public ?int $referrerId = null,
		public ?int $accountId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
