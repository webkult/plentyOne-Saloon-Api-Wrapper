<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class DocumentData extends SpatieData
{
	public function __construct(
		public ?string $content = null,
		public ?string $type = null,
		public ?int $number = null,
		public ?string $numberWithPrefix = null,
		public ?int $directoryId = null,
		public ?string $path = null,
		public ?int $userId = null,
		public ?string $source = null,
		public ?string $displayDate = null,
	) {
	}
}
