<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete folder
 *
 * Deletes a folder. The ID of the folder must be specified.
 */
class DeleteFolder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/folders/{$this->folderId}";
	}


	/**
	 * @param int $folderId The ID of the newsletter folder
	 */
	public function __construct(
		protected int $folderId,
	) {
	}
}
