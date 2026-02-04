<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all payment method names for a payment method id
 *
 * List all payment method names for a payment method id. The payment method id must be specified.
 */
class ListAllPaymentMethodNamesForPaymentMethodId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methodNames/{$this->paymentMethodId}";
	}


	/**
	 * @param int $paymentMethodId
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|int $page The page of results to search for
	 */
	public function __construct(
		protected int $paymentMethodId,
		protected ?int $itemsPerPage = null,
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemsPerPage' => $this->itemsPerPage, 'page' => $this->page]);
	}
}
