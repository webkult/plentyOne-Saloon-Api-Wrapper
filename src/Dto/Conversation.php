<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class Conversation extends SpatieData
{
	public function __construct(
		public ?string $uuid = null,
		public ?string $shortId = null,
		public ?string $plentyIdHash = null,
		public ?int $plentyId = null,
		public ?string $inboxId = null,
		public ?string $title = null,
		public ?array $tagIds = null,
		public ?bool $isClosed = null,
		public ?bool $isDeleted = null,
		public ?array $readBy = null,
		public ?string $priorityId = null,
		public ?int $typeId = null,
		public ?int $typePosition = null,
		public ?int $statusId = null,
		public ?int $statusPosition = null,
		public ?bool $hasWhisperedMessages = null,
		public ?array $messagesTitles = null,
		public ?array $messagesBodies = null,
		public ?array $messagesTags = null,
		public ?array $replyTo = null,
		public ?array $messagesPaths = null,
		public ?array $messagesIds = null,
		public ?int $isMigratedToEs = null,
		public ?bool $isArchived = null,
		public ?string $conversationPreview = null,
		public ?int $categoryId = null,
		public ?array $linkedFolders = null,
		public ?array $marketplacesMetadata = null,
		#[MapName('_empty')]
		public ?bool $empty = null,
	) {
	}
}
