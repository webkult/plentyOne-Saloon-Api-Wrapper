<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContentLink extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $contentId = null,
		public ?string $containerName = null,
		public ?int $pluginSetId = null,
		public ?string $language = null,
		public ?bool $active = null,
		public ?string $relatedContentType = null,
		public ?string $relatedContainerName = null,
		public ?bool $inherit = null,
		public ?bool $invalid = null,
	) {
	}
}
