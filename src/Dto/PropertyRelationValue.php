<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyRelationValue extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $relationId = null,
		public ?string $lang = null,
		public ?string $value = null,
		public ?string $description = null,
	) {
	}
}
