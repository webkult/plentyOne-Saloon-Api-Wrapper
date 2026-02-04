<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationMarket extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $marketId = null,
		public ?string $createdAt = null,
	) {
	}
}
