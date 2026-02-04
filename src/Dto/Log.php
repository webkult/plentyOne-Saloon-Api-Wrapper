<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Log extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $createdAt = null,
		public ?string $integration = null,
		public ?string $identifier = null,
		public ?string $code = null,
		public ?string $referenceType = null,
		public ?string $referenceValue = null,
		public ?string $level = null,
		public ?string $additionalInfo = null,
		public ?string $callerFunction = null,
		public ?int $callerLine = null,
		public ?array $references = null,
	) {
	}
}
