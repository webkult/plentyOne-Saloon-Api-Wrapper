<?php

namespace PlentyOne\Api\Requests\Export;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Export an elastic export.
 *
 * Export an elastic export. The export ID must be specified.
 */
class ExportElasticExport extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/export/{$this->exportKey}/{$this->token}";
	}


	/**
	 * @param int $exportKey
	 * @param int $token
	 */
	public function __construct(
		protected int $exportKey,
		protected int $token,
	) {
	}
}
