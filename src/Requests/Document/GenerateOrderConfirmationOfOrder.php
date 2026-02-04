<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate order confirmation of an order
 *
 * Generate order confirmation of an order. The ID of the order must be specified.
 * The document can
 * only be generated for orders of the type 'order', 'warranty', 'repair', 'advance order' and 'offer'.
 */
class GenerateOrderConfirmationOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/order_confirmation/generate";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param null|string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param null|string $comment Comment that appears below the stock units.
	 * @param null|bool $valuta Deprecated. This parameter has no effect anymore.
	 * @param null|bool $discount Deprecated. This parameter has no effect anymore.
	 * @param null|int $discountPercentage Deprecated. This parameter has no effect anymore.
	 * @param null|int $discountDays Deprecated. This parameter has no effect anymore.
	 * @param null|bool $paymentDue Deprecated. This parameter has no effect anymore.
	 * @param null|int $paymentDueDays Deprecated. This parameter has no effect anymore.
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $documentDate = null,
		protected ?string $comment = null,
		protected ?bool $valuta = null,
		protected ?bool $discount = null,
		protected ?int $discountPercentage = null,
		protected ?int $discountDays = null,
		protected ?bool $paymentDue = null,
		protected ?int $paymentDueDays = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'documentDate' => $this->documentDate,
			'comment' => $this->comment,
			'valuta' => $this->valuta,
			'discount' => $this->discount,
			'discountPercentage' => $this->discountPercentage,
			'discountDays' => $this->discountDays,
			'paymentDue' => $this->paymentDue,
			'paymentDueDays' => $this->paymentDueDays,
		]);
	}
}
