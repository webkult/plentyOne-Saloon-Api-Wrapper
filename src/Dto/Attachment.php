<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Attachment extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?string $message = null,
		public ?int $size = null,
		public ?string $contentType = null,
		public ?string $content = null,
		public ?string $createdAt = null,
	) {
	}
}
