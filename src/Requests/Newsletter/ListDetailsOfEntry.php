<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List details of an entry
 *
 * Lists details of an entry. The ID of the entry must be specified.
 */
class ListDetailsOfEntry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/{$this->entryId}";
	}


	/**
	 * @param int $entryId The ID of the newsletter entry.
	 */
	public function __construct(
		protected int $entryId,
	) {
	}
}
