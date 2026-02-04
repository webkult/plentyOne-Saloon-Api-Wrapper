<?php

namespace PlentyOne\Api\Requests\ExportSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete export
 *
 * Deletes an export. The ID of the export must be specified.
 */
class DeleteExport extends Request
{
	protected Method $method = Method::DELETE;


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
