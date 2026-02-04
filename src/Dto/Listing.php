<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Listing extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $itemId = null,
		public ?int $typeId = null,
		public ?int $stockDependenceTypeId = null,
		public ?int $unitCombinationId = null,
	) {
	}
}
