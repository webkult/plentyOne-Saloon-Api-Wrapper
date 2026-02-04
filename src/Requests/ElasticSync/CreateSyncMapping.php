<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a sync mapping.
 *
 * Creates a sync mapping.
 */
class CreateSyncMapping extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/mapping";
	}


	/**
	 * @param int $syncId
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
