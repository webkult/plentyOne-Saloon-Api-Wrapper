<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TicketMessage extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $ticketId = null,
		public ?int $userId = null,
		public ?string $createdAt = null,
		public ?string $text = null,
		public ?array $type = null,
		public ?array $source = null,
		public ?int $topicId = null,
	) {
	}
}
