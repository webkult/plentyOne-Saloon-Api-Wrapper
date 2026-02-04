<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Export\ExportElasticExport;
use PlentyOne\Api\Requests\Export\GenerateToken;
use PlentyOne\Api\Requests\Export\GetFormatKeys;
use PlentyOne\Api\Requests\Export\ListExportDocuments;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Export extends BaseResource
{
	/**
	 * @param int $exportKey
	 */
	public function exportElasticExport(int $exportKey): Response
	{
		return $this->connector->send(new ExportElasticExport($exportKey));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $exportKey
	 * @param int $token
	 */
	public function exportElasticExportDuplicate1(int $exportKey, int $token): Response
	{
		return $this->connector->send(new ExportElasticExport($exportKey, $token));
	}


	public function getFormatKeys(): Response
	{
		return $this->connector->send(new GetFormatKeys());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $type
	 */
	public function getFormatKeysDuplicate2(int $type): Response
	{
		return $this->connector->send(new GetFormatKeys($type));
	}


	public function generateToken(): Response
	{
		return $this->connector->send(new GenerateToken());
	}


	/**
	 * @param int $orderId
	 */
	public function listExportDocuments(int $orderId): Response
	{
		return $this->connector->send(new ListExportDocuments($orderId));
	}
}
