<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BoardTaskReference extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $taskId = null,
		public ?string $referenceValue = null,
	) {
	}
}
