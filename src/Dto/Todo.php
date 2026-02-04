<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Todo extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $flag = null,
		public ?int $userId = null,
		public ?int $priorityId = null,
		public int|float|null $progress = null,
		public ?string $title = null,
		public ?string $description = null,
	) {
	}
}
