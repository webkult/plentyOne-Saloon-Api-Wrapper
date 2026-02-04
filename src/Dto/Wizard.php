<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Wizard extends SpatieData
{
	public function __construct(
		public ?string $title = null,
		public ?string $key = null,
		public ?string $settingsHandlerClass = null,
		public ?string $shortDescription = null,
		public ?string $translationKey = null,
		public ?string $deleteConfirmationText = null,
		public ?array $topics = null,
		public ?array $steps = null,
		public ?int $priority = null,
		public ?string $relevance = null,
		public ?array $keywords = null,
	) {
	}
}
