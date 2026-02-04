<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Export raw data of a given key figure to a spreadsheet (google, microsoft)
 *
 * Returns <string>"true" if operation has been completed successfully, or <string>"false" otherwise
 */
class ExportRawDataOfGivenKeyFigureToSpreadsheetGoogleMicrosoft extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/raw-data/{$this->keyFigureConfigId}/export-spreadsheet";
	}


	/**
	 * @param int $keyFigureConfigId
	 * @param string $spreadsheetUrl The URL pointing to the spreadsheet
	 * @param array $columnsToExport An array containing the columns from raw data which will be exported
	 * @param string $startingCell The top-left cell inside the spreadsheet from which the export will fill data
	 */
	public function __construct(
		protected int $keyFigureConfigId,
		protected string $spreadsheetUrl,
		protected array $columnsToExport,
		protected string $startingCell,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'spreadsheetURL' => $this->spreadsheetUrl,
			'columnsToExport' => $this->columnsToExport,
			'startingCell' => $this->startingCell,
		]);
	}
}
