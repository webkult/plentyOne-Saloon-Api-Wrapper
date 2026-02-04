<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Message extends SpatieData
{
	public function __construct(
		public ?string $uuid = null,
		public ?string $plentyIdHash = null,
		public ?string $parentUuid = null,
		public ?string $conversationId = null,
		public ?bool $whispered = null,
		public ?array $tags = null,
		public ?string $title = null,
		public ?string $preview = null,
		public ?string $message = null,
		public ?string $plainMessage = null,
		public ?int $attachedFilesCount = null,
		public ?string $doneAt = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $deletedAt = null,
		public ?int $deletedBy = null,
		public ?int $categoryId = null,
		public ?int $typeId = null,
		public ?int $typePosition = null,
		public ?int $statusId = null,
		public ?int $statusPosition = null,
	) {
	}
}
