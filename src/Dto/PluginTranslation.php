<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PluginTranslation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $pluginSetId = null,
		public ?string $pluginName = null,
		public ?string $languageCode = null,
		public ?string $fileName = null,
		public ?string $key = null,
		public ?string $value = null,
	) {
	}
}
