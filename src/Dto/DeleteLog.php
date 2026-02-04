<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class DeleteLog extends SpatieData
{
	public function __construct(
		public ?int $referenceType = null,
		public ?int $referenceValue = null,
		public ?string $userRealName = null,
		public ?string $updatedAt = null,
		public ?int $userId = null,
	) {
	}
}
