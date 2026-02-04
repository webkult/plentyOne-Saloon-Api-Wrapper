<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesPriceName extends SpatieData
{
	public function __construct(
		public ?int $salesPriceId = null,
		public ?string $lang = null,
		public ?string $nameInternal = null,
		public ?string $nameExternal = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
