<?php

namespace PlentyOne\Api\Requests\Export;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get format keys
 *
 * Shows all format keys registered by plugins in production state
 */
class GetFormatKeys extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/exports/format_keys/{$this->type}";
	}


	/**
	 * @param int $type
	 */
	public function __construct(
		protected int $type,
	) {
	}
}
