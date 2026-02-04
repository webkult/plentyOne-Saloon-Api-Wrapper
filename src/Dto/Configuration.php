<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class Configuration extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $key = null,
		public ?string $value = null,
		#[MapName('plugin_id')]
		public ?int $pluginId = null,
		public ?string $tab = null,
		public ?string $label = null,
		public ?string $type = null,
		public ?array $possibleValues = null,
		public ?string $default = null,
		public ?bool $scss = null,
		#[MapName('updated_at')]
		public ?string $updatedAt = null,
		public ?int $pluginSetEntryId = null,
	) {
	}
}
