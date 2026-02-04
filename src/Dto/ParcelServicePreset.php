<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ParcelServicePreset extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $parcelServiceId = null,
		public ?string $backendName = null,
		public ?int $flag = null,
		public ?int $priority = null,
		public ?int $category = null,
		public ?int $useArticlePorto = null,
		public ?int $isInsured = null,
		public ?int $isExpress = null,
		public ?int $isPostident = null,
		public ?int $isDefaultEnabled = null,
		public int|float|null $islandFee = null,
		public ?int $isCod = null,
		public ?array $supportedMultishop = null,
		public ?array $supportedReferrer = null,
		public ?array $subreferrerSupport = null,
		public ?array $excludedPaymentMethods = null,
		public ?array $excludedCustomerGroups = null,
		public ?string $shippingGroup = null,
		public ?string $dispatchIdentifier = null,
		public ?int $auctionType = null,
		public ?array $supportedLoyaltyPrograms = null,
		public ?string $updatedAt = null,
		public ?int $showDataPrivacyAgreementHint = null,
		public ?string $transmitPrivacyRule = null,
		public ?string $alternativeEmail = null,
		public ?string $alternativePhone = null,
		public ?int $isParcelBox = null,
		public ?int $isPostOffice = null,
	) {
	}
}
