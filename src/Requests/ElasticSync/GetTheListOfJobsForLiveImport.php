<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get the list of jobs for Live Import
 *
 * Gets the list of jobs for Live Import
 */
class GetTheListOfJobsForLiveImport extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->statusId}/live/queueing";
	}


	/**
	 * @param int $statusId
	 */
	public function __construct(
		protected int $statusId,
	) {
	}
}
