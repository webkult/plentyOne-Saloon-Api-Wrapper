<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List accounting locations of a client
 *
 * Lists accounting locations of a client. The plenty ID of the client must be specified.
 */
class ListAccountingLocationsOfClient extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/stores/{$this->plentyId}/locations";
	}


	/**
	 * @param int $plentyId
	 */
	public function __construct(
		protected int $plentyId,
	) {
	}
}
