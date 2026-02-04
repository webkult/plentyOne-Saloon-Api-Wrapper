<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactEvent extends SpatieData
{
	public function __construct(
		public ?int $eventId = null,
		public ?int $contactId = null,
		public ?int $userId = null,
		public ?int $eventDuration = null,
		public ?string $eventType = null,
		public ?int $orderRowId = null,
		public ?string $eventInfo = null,
		public ?bool $billable = null,
		public ?string $eventInsertedAt = null,
		public ?string $eventBilledAt = null,
		public ?string $eventProvisionPaidAt = null,
		public int|float|null $eventCreditValue = null,
	) {
	}
}
