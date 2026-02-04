<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesPriceOnlineStore extends SpatieData
{
	public function __construct(
		public ?int $salesPriceId = null,
		public ?int $plentyId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
