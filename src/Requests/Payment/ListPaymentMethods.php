<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List payment methods
 *
 * Lists all payment method plugins.
 */
class ListPaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods";
	}


	/**
	 * @param null|bool $backendSearchable Receive only payment methods that are searchable for the backend.
	 * @param null|bool $backendActive Receive only payment methods that are active for the backend.
	 */
	public function __construct(
		protected ?bool $backendSearchable = null,
		protected ?bool $backendActive = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['backendSearchable' => $this->backendSearchable, 'backendActive' => $this->backendActive]);
	}
}
