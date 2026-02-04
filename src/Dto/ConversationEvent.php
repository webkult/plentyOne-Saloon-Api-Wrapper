<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ConversationEvent extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?string $eventClass = null,
		public ?bool $isActive = null,
		public ?int $userId = null,
		public ?string $updatedAt = null,
		public ?string $executedAt = null,
	) {
	}
}
