<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete payents
 *
 * Bulk delete payments specified by their ids.
 */
class DeletePayents extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/bulk";
	}


	/**
	 * @param null|array $ids An array with payment ids to be deleted. Eg: ['ids' => [1,2,3]]
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
