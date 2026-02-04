<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes RawData\Models that are deletable
 *
 * Deletes RawData\Models that are deletable if these are not deletable
 * the method will return a json
 * response with the message:
 * 'Deleting raw data is not allowed for this format'
 */
class DeletesRawDatamodelsThatAreDeletable extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/raw-data/{$this->dataName}";
	}


	/**
	 * @param int $dataName
	 * @param array $path List of primary keys of the records to be deleted
	 */
	public function __construct(
		protected int $dataName,
		protected array $path,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['path' => $this->path]);
	}
}
