<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List details of a folder
 *
 * Lists details of a folder. The ID of the folder must be specified.
 */
class ListDetailsOfFolder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/folders/{$this->folderId}";
	}


	/**
	 * @param int $folderId The ID of the newsletter folder.
	 */
	public function __construct(
		protected int $folderId,
	) {
	}
}
