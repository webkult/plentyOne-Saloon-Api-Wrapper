<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Import a page for Live Import
 *
 * Imports and processes every page.
 */
class ImportPageForLiveImport extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->statusId}/live/processing/{$this->syncId}/{$this->page}";
	}


	/**
	 * @param int $statusId
	 * @param int $syncId
	 * @param int $page
	 */
	public function __construct(
		protected int $statusId,
		protected int $syncId,
		protected int $page,
	) {
	}
}
