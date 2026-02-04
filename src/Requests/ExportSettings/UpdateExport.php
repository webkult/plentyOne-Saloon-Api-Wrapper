<?php

namespace PlentyOne\Api\Requests\ExportSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an export
 *
 * Updates an export. The ID of the export must be specified.
 */
class UpdateExport extends Request
{
	protected Method $method = Method::PUT;


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
