<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Attribute extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $backendName = null,
		public ?int $position = null,
		public ?bool $isSurchargePercental = null,
		public ?bool $isLinkableToImage = null,
		public ?string $amazonAttribute = null,
		public ?string $fruugoAttribute = null,
		public ?int $pixmaniaAttribute = null,
		public ?string $ottoAttribute = null,
		public ?string $googleShoppingAttribute = null,
		public ?int $neckermannAtEpAttribute = null,
		public ?string $typeOfSelectionInOnlineStore = null,
		public ?int $laRedouteAttribute = null,
		public ?bool $isGroupable = null,
	) {
	}
}
