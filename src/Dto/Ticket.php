<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Ticket extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $typeId = null,
		public ?int $priorityId = null,
		public ?int $parentTicketId = null,
		public ?int $statusId = null,
		public ?array $confidential = null,
		public ?int $contactId = null,
		public ?int $orderId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $contactLastUpdateAt = null,
		public ?string $deadlineAt = null,
		public ?string $finishedAt = null,
		public ?string $title = null,
		public ?int $progress = null,
		public ?int $plentyId = null,
		public ?array $source = null,
		public ?int $documentsCount = null,
		public ?int $hasDocuments = null,
		public ?int $childrenCount = null,
		public ?string $resubmissionAt = null,
		public ?string $parseData = null,
	) {
	}
}
