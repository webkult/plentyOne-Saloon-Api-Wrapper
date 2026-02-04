<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AttributeValueSet extends SpatieData
{
	public function __construct(
		public ?int $attributeValueSetId = null,
		public ?int $attributeId = null,
		public ?int $valueId = null,
		public ?int $isLinkableToImage = null,
	) {
	}
}
