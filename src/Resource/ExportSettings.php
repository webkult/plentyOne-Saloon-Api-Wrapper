<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\ExportSettings\CreateExport;
use PlentyOne\Api\Requests\ExportSettings\DeleteExport;
use PlentyOne\Api\Requests\ExportSettings\DeleteFilterFromTheExport;
use PlentyOne\Api\Requests\ExportSettings\GetExport;
use PlentyOne\Api\Requests\ExportSettings\ListElasticExports;
use PlentyOne\Api\Requests\ExportSettings\UpdateExport;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ExportSettings extends BaseResource
{
	/**
	 * @param int $id The ID of the export
	 * @param string $formatKey The format of the export
	 * @param string $type The type of the export
	 * @param string $name The name of the export
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function listElasticExports(
		?int $id = null,
		?string $formatKey = null,
		?string $type = null,
		?string $name = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListElasticExports($id, $formatKey, $type, $name, $page, $itemsPerPage));
	}


	public function createExport(): Response
	{
		return $this->connector->send(new CreateExport());
	}


	/**
	 * @param int $exportId
	 */
	public function getExport(int $exportId): Response
	{
		return $this->connector->send(new GetExport($exportId));
	}


	/**
	 * @param int $exportId
	 */
	public function updateExport(int $exportId): Response
	{
		return $this->connector->send(new UpdateExport($exportId));
	}


	/**
	 * @param int $exportId
	 */
	public function deleteExport(int $exportId): Response
	{
		return $this->connector->send(new DeleteExport($exportId));
	}


	/**
	 * @param int $exportId
	 * @param int $key
	 */
	public function deleteFilterFromTheExport(int $exportId, int $key): Response
	{
		return $this->connector->send(new DeleteFilterFromTheExport($exportId, $key));
	}
}
