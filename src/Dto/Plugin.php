<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class Plugin extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?int $position = null,
		public ?bool $activeStage = null,
		public ?bool $activeProductive = null,
		#[MapName('created_at')]
		public ?string $createdAt = null,
		#[MapName('updated_at')]
		public ?string $updatedAt = null,
		public ?bool $inStage = null,
		public ?bool $inProductive = null,
		public ?bool $isConnectedWithGit = null,
		public ?array $updateInformation = null,
		public ?string $type = null,
		public ?bool $installed = null,
		public ?string $version = null,
		public ?string $versionStage = null,
		public ?string $versionProductive = null,
		public ?string $description = null,
		public ?string $namespace = null,
		public ?array $dependencies = null,
		public ?string $author = null,
		public int|float|null $price = null,
		public ?array $keywords = null,
		public ?array $require = null,
		public ?array $platform = null,
		public ?array $notInstalledRequirements = null,
		public ?array $notActiveStageRequirements = null,
		public ?array $notActiveProductiveRequirements = null,
		public ?array $runOnBuild = null,
		public ?array $checkOnBuild = null,
		public ?string $authorIcon = null,
		public ?string $pluginIcon = null,
		public ?string $license = null,
		public ?array $shortDescription = null,
		public ?bool $isClosedSource = null,
		public ?string $inboxPath = null,
		public ?array $marketplaceName = null,
		public ?string $source = null,
		public ?array $javaScriptFiles = null,
		public ?array $containers = null,
		public ?array $dataProviders = null,
		public ?array $categories = null,
		public ?string $webhookUrl = null,
		public ?bool $isExternalTool = null,
		public ?array $directDownloadLinks = null,
		public ?string $forwardLink = null,
		public ?string $branch = null,
		public ?string $commit = null,
		public ?bool $offerTrial = null,
		public ?bool $offerFreemium = null,
		public ?array $pluginSetIds = null,
	) {
	}
}
