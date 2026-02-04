<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class DocumentGenerationPreview extends SpatieData
{
	public function __construct(
		public ?string $hash = null,
		public ?string $content = null,
		public ?int $status = null,
		public ?int $orderId = null,
	) {
	}
}
