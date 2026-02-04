<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AttributeName extends SpatieData
{
	public function __construct(
		public ?int $attributeId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
