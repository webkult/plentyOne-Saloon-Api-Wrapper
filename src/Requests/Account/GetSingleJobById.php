<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get single job by id
 *
 * Get single job by id
 */
class GetSingleJobById extends Request
{
	protected Method $method = Method::GET;


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
