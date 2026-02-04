<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BoardTask extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $taskName = null,
		public ?string $description = null,
		public ?int $position = null,
		public ?string $columnId = null,
		public ?string $boardId = null,
	) {
	}
}
