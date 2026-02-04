<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationAdditionalSku extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $variationId = null,
		public int|float|null $marketId = null,
		public ?int $marketAccountId = null,
		public ?string $sku = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
