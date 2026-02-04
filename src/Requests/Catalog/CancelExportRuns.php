<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Cancel export runs
 *
 * Cancel export and live export runs.
 */
class CancelExportRuns extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/statuses/{$this->statusId}/cancel";
	}


	/**
	 * @param int $statusId
	 */
	public function __construct(
		protected int $statusId,
	) {
	}
}
