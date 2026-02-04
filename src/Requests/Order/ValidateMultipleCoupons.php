<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Validate multiple coupons
 *
 * Validates if multiple coupon codes can be used for the specified items, contact ID, etc. At least
 * one code must be specified. Only one coupon code for special offers (promotional code) can be
 * specified. Promotional codes are validated first. Gift card codes are validated and redeemed after
 * the promotional code to ensure that any discounts are calculated correctly.
 * If any coupon code is
 * invalid, a CouponCodeValidation object with an exception parameter will be added to the list. If the
 * coupon code is valid, a CouponCodeValidation object will be added to the list.
 */
class ValidateMultipleCoupons extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/codes";
	}


	/**
	 * @param array $coupons The coupons to validate.
	 * @param null|bool $callFromScheduler Flag that indicates whether the validation is requested by a subscription order or not. TRUE = The validation is requested by a subscription order. FALSE = The validation is not requested by a subscription order.
	 * @param int $plentyId The plenty id.
	 * @param int $shipToCountry The country of delivery.
	 * @param null|string $taxIdNumber The tax id number.
	 * @param null|int $contactClass The contact class.
	 * @param null|int $contactType The contact type.
	 */
	public function __construct(
		protected array $coupons,
		protected ?bool $callFromScheduler = null,
		protected int $plentyId,
		protected int $shipToCountry,
		protected ?string $taxIdNumber = null,
		protected ?int $contactClass = null,
		protected ?int $contactType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'coupons' => $this->coupons,
			'callFromScheduler' => $this->callFromScheduler,
			'plentyId' => $this->plentyId,
			'shipToCountry' => $this->shipToCountry,
			'taxIdNumber' => $this->taxIdNumber,
			'contactClass' => $this->contactClass,
			'contactType' => $this->contactType,
		]);
	}
}
