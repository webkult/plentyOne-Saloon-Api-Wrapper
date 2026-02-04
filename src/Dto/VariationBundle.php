<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationBundle extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $variationId = null,
		public ?int $componentVariationId = null,
		public ?int $componentQuantity = null,
		public ?string $lastUpdatedTimestamp = null,
		public ?string $createdAt = null,
	) {
	}
}
