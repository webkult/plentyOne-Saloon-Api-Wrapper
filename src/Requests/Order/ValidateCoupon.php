<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Validate a coupon
 *
 * Validates if a coupon code can be used for the specified items, contact ID, etc. The code must be
 * specified. If the coupon code is invalid, a ValidationException will be thrown. If the coupon code
 * is valid, a CouponCodeValidation object will be returned.
 */
class ValidateCoupon extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/codes/{$this->coupon}";
	}


	/**
	 * @param string $coupon The coupon to validate.
	 * @param null|bool $callFromScheduler Flag that indicates whether the validation is requested by a subscription order or not. TRUE = The validation is requested by a subscription order. FALSE = The validation is not requested by a subscription order.
	 * @param int $plentyId The plenty id.
	 * @param int $shipToCountry The country of delivery.
	 * @param null|string $taxIdNumber The tax id number.
	 * @param null|int $contactClass The contact class.
	 * @param null|int $contactType The contact type.
	 */
	public function __construct(
		protected string $coupon,
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
			'callFromScheduler' => $this->callFromScheduler,
			'plentyId' => $this->plentyId,
			'shipToCountry' => $this->shipToCountry,
			'taxIdNumber' => $this->taxIdNumber,
			'contactClass' => $this->contactClass,
			'contactType' => $this->contactType,
		]);
	}
}
