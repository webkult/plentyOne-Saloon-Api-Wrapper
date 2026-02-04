<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationMarketIdentNumber extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $variationId = null,
		public ?int $countryId = null,
		public ?string $type = null,
		public ?int $position = null,
		public ?string $value = null,
	) {
	}
}
