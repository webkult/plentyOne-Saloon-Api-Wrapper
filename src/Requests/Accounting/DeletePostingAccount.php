<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a posting account
 *
 * Delete a posting account specified by the id.
 */
class DeletePostingAccount extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/posting_accounts/{$this->id}";
	}


	/**
	 * @param int $id The ID of the posting account
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
