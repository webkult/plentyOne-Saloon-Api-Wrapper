<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class StorageObject extends SpatieData
{
	public function __construct(
		public ?string $key = null,
		public ?string $path = null,
		public ?string $lastModified = null,
		public ?array $metaData = null,
		public ?string $eTag = null,
		public ?int $size = null,
		public ?string $storageClass = null,
		public ?string $body = null,
		public ?string $contentType = null,
		public ?string $contentLength = null,
	) {
	}
}
