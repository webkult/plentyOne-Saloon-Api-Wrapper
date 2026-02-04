<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class StorageObjectList extends SpatieData
{
	public function __construct(
		public ?bool $isTruncated = null,
		public ?string $nextContinuationToken = null,
		public ?array $commonPrefixes = null,
	) {
	}
}
