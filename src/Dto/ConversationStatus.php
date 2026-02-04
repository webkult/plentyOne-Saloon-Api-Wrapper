<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class ConversationStatus extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $position = null,
		public ?int $userId = null,
		public ?bool $isDeleted = null,
		#[MapName('_empty')]
		public ?string $empty = null,
	) {
	}
}
