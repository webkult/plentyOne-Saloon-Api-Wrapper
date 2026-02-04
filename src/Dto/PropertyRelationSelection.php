<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyRelationSelection extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $relationId = null,
		public ?int $selectionId = null,
	) {
	}
}
