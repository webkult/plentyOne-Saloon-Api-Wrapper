<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ConversationFolder extends SpatieData
{
	public function __construct(
		public ?string $uuid = null,
		public ?string $name = null,
		public ?int $userId = null,
	) {
	}
}
