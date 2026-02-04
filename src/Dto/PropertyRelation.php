<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $propertyId = null,
		public ?string $type = null,
		public ?string $targetId = null,
		public ?int $groupId = null,
		public int|float|null $markup = null,
		public ?string $value = null,
	) {
	}
}
