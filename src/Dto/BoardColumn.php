<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BoardColumn extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $boardId = null,
		public ?string $columnName = null,
		public ?int $position = null,
	) {
	}
}
