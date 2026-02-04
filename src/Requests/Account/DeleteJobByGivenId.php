<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a job by a given id
 *
 * Delete a job by a given id. Hard delete, it will be entirely removed.
 */
class DeleteJobByGivenId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/jobs/{$this->jobId}";
	}


	/**
	 * @param int $jobId
	 */
	public function __construct(
		protected int $jobId,
	) {
	}
}
