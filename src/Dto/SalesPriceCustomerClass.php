<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesPriceCustomerClass extends SpatieData
{
	public function __construct(
		public ?int $salesPriceId = null,
		public ?int $customerClassId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
