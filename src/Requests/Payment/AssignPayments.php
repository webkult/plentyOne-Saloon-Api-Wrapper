<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Assign Payments
 *
 * Bulk auto assign payments specified by their ids.
 */
class AssignPayments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/orders/autoassign/bulk";
	}


	/**
	 * @param null|array $ids An array with payment ids to be autoassigned. Eg: ['ids' => [1,2,3]]
	 */
	public function __construct(
		protected ?array $ids = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['ids' => $this->ids]);
	}
}
