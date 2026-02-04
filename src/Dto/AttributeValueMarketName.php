<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AttributeValueMarketName extends SpatieData
{
	public function __construct(
		public ?int $valueId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $name2 = null,
		public ?int $attributeId = null,
		public ?string $referenceType = null,
	) {
	}
}
