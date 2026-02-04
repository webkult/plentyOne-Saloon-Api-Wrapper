<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Unpack variation
 *
 * Unpacks a variation.
 */
class UnpackVariation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/stock/unpackVariation";
	}


	/**
	 * @param int $warehouseId
	 * @param array $variationStockIntake The new item that will be booked in as result of the unpacking
	 * @param array $variationStockCorrection The item that is unpacked
	 */
	public function __construct(
		protected int $warehouseId,
		protected array $variationStockIntake,
		protected array $variationStockCorrection,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['VariationStockIntake' => $this->variationStockIntake, 'VariationStockCorrection' => $this->variationStockCorrection]);
	}
}
