<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PluginSet extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $hash = null,
		public ?bool $hasSuccessfulBuild = null,
		public ?int $parentPluginSetId = null,
		public ?string $name = null,
		public ?string $description = null,
	) {
	}
}
