<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete Batch of Companies
 *
 * Deletes multiple companies based on their IDs. The IDs of the companies must be specified.
 */
class DeleteBatchOfCompanies extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/batchDelete";
	}


	public function __construct()
	{
	}
}
