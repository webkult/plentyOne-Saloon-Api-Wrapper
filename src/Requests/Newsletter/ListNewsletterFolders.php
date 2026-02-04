<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List newsletter folders
 *
 * Lists all newsletter folders.
 */
class ListNewsletterFolders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/folders";
	}


	/**
	 * @param int $folderId The ID of the newsletter folder
	 */
	public function __construct(
		protected int $folderId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['folderId' => $this->folderId]);
	}
}
