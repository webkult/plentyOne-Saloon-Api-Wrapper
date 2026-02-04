<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationDefaultCategory extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $branchId = null,
		public ?int $plentyId = null,
		public ?string $manually = null,
	) {
	}
}
