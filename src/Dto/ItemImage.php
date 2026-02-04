<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class ItemImage extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $itemId = null,
		public ?string $fileType = null,
		public ?string $path = null,
		public ?int $position = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		#[MapName('md5Checksum')]
		public ?string $md5checksum = null,
		#[MapName('md5ChecksumOriginal')]
		public ?string $md5checksumOriginal = null,
		public ?int $hasLinkedVariations = null,
		public ?int $size = null,
		public ?int $width = null,
		public ?int $height = null,
		public ?string $url = null,
		public ?string $urlMiddle = null,
		public ?string $urlPreview = null,
		public ?string $urlSecondPreview = null,
	) {
	}
}
