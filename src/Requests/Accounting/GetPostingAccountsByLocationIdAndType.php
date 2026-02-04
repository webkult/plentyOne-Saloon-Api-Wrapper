<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get posting accounts by locationId and type
 *
 * Get all posting accounts by locationId and type.
 */
class GetPostingAccountsByLocationIdAndType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/{$this->type}/posting_accounts";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 * @param string $type The type of the PostingAccount.
	 */
	public function __construct(
		protected int $locationId,
		protected string $type,
	) {
	}
}
