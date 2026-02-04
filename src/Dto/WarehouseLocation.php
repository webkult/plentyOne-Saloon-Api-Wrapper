<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class WarehouseLocation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $levelId = null,
		public ?string $label = null,
		public ?string $purposeKey = null,
		public ?string $statusKey = null,
		public ?int $position = null,
		public ?string $fullLabel = null,
		public ?string $type = null,
		public ?string $notes = null,
	) {
	}
}
