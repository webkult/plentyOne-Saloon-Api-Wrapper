<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class ContactClass extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?int $priceColumn = null,
		public ?int $showPrice = null,
		public ?int $discountType = null,
		public ?int $position = null,
		public int|float|null $pqsQuantity1 = null,
		public int|float|null $pqsQuantity2 = null,
		public int|float|null $pqsQuantity3 = null,
		public int|float|null $pqsQuantity4 = null,
		public int|float|null $pqsQuantity5 = null,
		public int|float|null $pqsQuantity6 = null,
		public int|float|null $pqsQuantity7 = null,
		public int|float|null $pqsQuantity8 = null,
		public int|float|null $pqsQuantity9 = null,
		public int|float|null $pqsQuantity10 = null,
		public int|float|null $pnsQuantity1 = null,
		public int|float|null $pnsDiscount1 = null,
		public int|float|null $pnsQuantity2 = null,
		public int|float|null $pnsDiscount2 = null,
		public int|float|null $pnsQuantity3 = null,
		public int|float|null $pnsDiscount3 = null,
		public int|float|null $pnsQuantity4 = null,
		public int|float|null $pnsDiscount4 = null,
		public int|float|null $pnsQuantity5 = null,
		public int|float|null $pnsDiscount5 = null,
		public ?string $pmsMop = null,
		public int|float|null $pmsDiscount = null,
		public int|float|null $paqsDiscount = null,
		public ?int $payableDueWithin = null,
		public ?int $minQuantity = null,
		public ?int $dontUseItemPriceRebates = null,
		public ?int $customerId = null,
		public ?string $allowedMops = null,
		public int|float|null $pdwQuantity1 = null,
		public ?int $pdwDays1 = null,
		public int|float|null $pdwQuantity2 = null,
		public ?int $pdwDays2 = null,
		public int|float|null $pdwQuantity3 = null,
		public ?int $pdwDays3 = null,
		public int|float|null $pdwQuantity4 = null,
		public ?int $pdwDays4 = null,
		public int|float|null $pdwQuantity5 = null,
		public ?int $pdwDays5 = null,
		public ?string $customerGroupsPaymentNotice = null,
		public int|float|null $earlyPaymentDiscount = null,
		public int|float|null $earlyPaymentDiscountDays = null,
		public ?int $valuta = null,
		public int|float|null $manualDiscount = null,
		public ?array $allowedMethodOfPaymentIdsList = null,
		#[MapName('_empty')]
		public int|float|null $empty = null,
	) {
	}
}
