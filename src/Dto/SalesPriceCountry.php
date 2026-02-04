<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesPriceCountry extends SpatieData
{
	public function __construct(
		public ?int $salesPriceId = null,
		public ?int $countryId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
