<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AttributeValueImage extends SpatieData
{
	public function __construct(
		public ?int $imageId = null,
		public ?int $itemId = null,
		public ?int $attributeId = null,
		public ?int $valueId = null,
	) {
	}
}
