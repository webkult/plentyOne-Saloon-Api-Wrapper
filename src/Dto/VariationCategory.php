<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationCategory extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $categoryId = null,
		public ?int $position = null,
		public ?string $isNeckermannPrimary = null,
	) {
	}
}
