<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create sync matches.
 *
 * Creates sync matches.
 */
class CreateSyncMatches extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/matches";
	}


	/**
	 * @param int $syncId
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
