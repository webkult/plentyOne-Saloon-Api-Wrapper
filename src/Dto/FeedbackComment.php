<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class FeedbackComment extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $message = null,
		public ?bool $isVisible = null,
	) {
	}
}
