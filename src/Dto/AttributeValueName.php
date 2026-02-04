<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AttributeValueName extends SpatieData
{
	public function __construct(
		public ?int $valueId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
