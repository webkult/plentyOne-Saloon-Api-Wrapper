<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AttributeValueMap extends SpatieData
{
	public function __construct(
		public int|float|null $marketId = null,
		public ?int $attributeId = null,
		public ?int $attributeValueId = null,
		public ?string $name = null,
		public ?string $marketInformation1 = null,
		public ?string $marketInformation2 = null,
	) {
	}
}
