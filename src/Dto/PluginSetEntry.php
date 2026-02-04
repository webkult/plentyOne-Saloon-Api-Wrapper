<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PluginSetEntry extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $pluginId = null,
		public ?int $pluginSetId = null,
		public ?string $branchName = null,
		public ?string $commit = null,
		public ?int $position = null,
		public ?bool $isInstalledFromGit = null,
	) {
	}
}
