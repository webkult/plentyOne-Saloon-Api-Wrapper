<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesPriceCurrency extends SpatieData
{
	public function __construct(
		public ?int $salesPriceId = null,
		public ?string $currency = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
