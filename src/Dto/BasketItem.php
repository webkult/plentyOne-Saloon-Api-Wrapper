<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BasketItem extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $basketId = null,
		public ?string $sessionId = null,
		public ?int $orderRowId = null,
		public int|float|null $quantity = null,
		public int|float|null $quantityOriginally = null,
		public ?int $itemId = null,
		public ?int $priceId = null,
		public ?int $attributeValueSetId = null,
		public ?int $rebate = null,
		public int|float|null $vat = null,
		public int|float|null $price = null,
		public int|float|null $givenPrice = null,
		public ?int $givenVatId = null,
		public ?bool $useGivenPrice = null,
		public ?int $inputWidth = null,
		public ?int $inputLength = null,
		public ?int $inputHeight = null,
		public ?int $itemType = null,
		public ?string $externalItemId = null,
		public ?bool $noEditByCustomer = null,
		public ?int $costCenterId = null,
		public ?int $giftPackageForRowId = null,
		public ?int $position = null,
		public ?string $size = null,
		public ?int $shippingProfileId = null,
		public int|float|null $referrerId = null,
		public ?string $deliveryDate = null,
		public ?int $categoryId = null,
		public ?int $reservationDatetime = null,
		public ?int $variationId = null,
		public ?int $bundleVariationId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public int|float|null $attributeTotalMarkup = null,
		public ?array $basketItemOrderParams = null,
		public ?array $basketItemVariationProperties = null,
	) {
	}
}
