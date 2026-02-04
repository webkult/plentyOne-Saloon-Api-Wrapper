<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Basket extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $sessionId = null,
		public ?int $orderId = null,
		public ?int $customerId = null,
		public ?int $customerInvoiceAddressId = null,
		public ?int $customerShippingAddressId = null,
		public ?string $currency = null,
		public int|float|null $referrerId = null,
		public ?int $shippingCountryId = null,
		public ?int $methodOfPaymentId = null,
		public ?int $shippingProviderId = null,
		public ?int $shippingProfileId = null,
		public int|float|null $itemSum = null,
		public int|float|null $itemSumNet = null,
		public int|float|null $basketAmount = null,
		public int|float|null $basketAmountNet = null,
		public int|float|null $shippingAmount = null,
		public int|float|null $shippingAmountNet = null,
		public int|float|null $paymentAmount = null,
		public ?string $couponCode = null,
		public int|float|null $couponDiscount = null,
		public ?bool $shippingDeleteByCoupon = null,
		public int|float|null $basketRebate = null,
		public ?int $basketRebateType = null,
		public ?int $maxFsk = null,
		public ?int $orderTimestamp = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
