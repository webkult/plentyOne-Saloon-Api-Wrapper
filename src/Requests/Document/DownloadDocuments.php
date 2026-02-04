<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Download documents
 *
 * Downloads all documents as a zip file. The documents must be given as an array of indices. An
 * optional filename for the zip file can also be given
 */
class DownloadDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/documents/downloads/as_zip";
	}


	/**
	 * @param array $ids The document ids to be downloaded
	 * @param null|string $filename The filename to be used for the zip file
	 */
	public function __construct(
		protected array $ids,
		protected ?string $filename = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['ids' => $this->ids, 'filename' => $this->filename]);
	}
}
