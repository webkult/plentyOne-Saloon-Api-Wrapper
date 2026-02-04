<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Document extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $type = null,
		public ?int $number = null,
		public ?string $numberWithPrefix = null,
		public ?string $path = null,
		public ?int $userId = null,
		public ?string $source = null,
		public ?string $displayDate = null,
		public ?string $status = null,
		public ?string $content = null,
	) {
	}
}
