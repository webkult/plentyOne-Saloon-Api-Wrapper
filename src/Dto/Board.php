<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Board extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $boardName = null,
		public ?int $columnsCount = null,
		public ?int $tasksCount = null,
	) {
	}
}
