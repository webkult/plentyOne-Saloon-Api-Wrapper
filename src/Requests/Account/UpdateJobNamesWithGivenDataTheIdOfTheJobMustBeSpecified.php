<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a job names with given data. The id of the job must be specified.
 *
 * Update a job names with given data. The id of the job must be specified.
 */
class UpdateJobNamesWithGivenDataTheIdOfTheJobMustBeSpecified extends Request
{
	protected Method $method = Method::PUT;


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
