<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ConversationType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $position = null,
		public ?int $userId = null,
		public ?bool $isDeleted = null,
		public ?bool $categoryId = null,
	) {
	}
}
