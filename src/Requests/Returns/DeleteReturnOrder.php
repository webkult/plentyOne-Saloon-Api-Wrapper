<?php

namespace PlentyOne\Api\Requests\Returns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a return order
 *
 * Delete a return order by i given returns order ID. The returns order ID is mandatory.
 */
class DeleteReturnOrder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/returns/{$this->returnsId}";
	}


	/**
	 * @param int $returnsId
	 * @param int $returnsId Return order ID
	 */
	public function __construct(
		protected int $returnsId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$returnsId' => $this->returnsId]);
	}
}
