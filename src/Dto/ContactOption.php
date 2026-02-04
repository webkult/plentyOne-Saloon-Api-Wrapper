<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactOption extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $contactId = null,
		public ?int $typeId = null,
		public ?int $subTypeId = null,
		public ?string $value = null,
		public ?int $priority = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
