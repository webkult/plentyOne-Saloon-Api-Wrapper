<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationPropertyValueText extends SpatieData
{
	public function __construct(
		public ?int $valueId = null,
		public ?string $lang = null,
		public ?string $value = null,
	) {
	}
}
