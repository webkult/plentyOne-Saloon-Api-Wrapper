<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertySelectionName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $selectionId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $description = null,
	) {
	}
}
