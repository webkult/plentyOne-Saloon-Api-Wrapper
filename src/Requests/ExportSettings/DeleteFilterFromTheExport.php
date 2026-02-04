<?php

namespace PlentyOne\Api\Requests\ExportSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete filter from the export
 *
 * Deletes filter from the export. The ID of the export and the ID of the filter must be specified.
 */
class DeleteFilterFromTheExport extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/exports/{$this->exportId}/filters/{$this->key}";
	}


	/**
	 * @param int $exportId
	 * @param int $key
	 */
	public function __construct(
		protected int $exportId,
		protected int $key,
	) {
	}
}
