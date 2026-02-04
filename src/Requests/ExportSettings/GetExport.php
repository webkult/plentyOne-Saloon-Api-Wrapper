<?php

namespace PlentyOne\Api\Requests\ExportSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get export
 *
 * Gets detailed information about an export. The ID of the export must be specified.
 */
class GetExport extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/exports/{$this->exportId}";
	}


	/**
	 * @param int $exportId
	 */
	public function __construct(
		protected int $exportId,
	) {
	}
}
