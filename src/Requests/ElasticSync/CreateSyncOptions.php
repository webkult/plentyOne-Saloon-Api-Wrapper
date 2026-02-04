<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create sync options.
 *
 * Creates sync options.
 */
class CreateSyncOptions extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/options";
	}


	/**
	 * @param int $syncId
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
