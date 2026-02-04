<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Initiate + queue live import
 *
 * Initiates + queueing the jobs for Live Import
 */
class InitiateQueueLiveImport extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/live/initiate";
	}


	/**
	 * @param int $syncId
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
