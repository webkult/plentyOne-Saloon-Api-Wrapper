<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ConversationCategory extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $position = null,
		public ?int $userId = null,
		public ?string $icon = null,
		public ?string $iconType = null,
		public ?bool $isDeleted = null,
		public ?bool $isEnabled = null,
	) {
	}
}
