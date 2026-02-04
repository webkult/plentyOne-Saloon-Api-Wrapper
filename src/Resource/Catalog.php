<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Catalog\ActivateOrDeactivateCatalog;
use PlentyOne\Api\Requests\Catalog\BuildPrivateDownloadUrl;
use PlentyOne\Api\Requests\Catalog\BuildPublicDownloadUrl;
use PlentyOne\Api\Requests\Catalog\CancelExportRuns;
use PlentyOne\Api\Requests\Catalog\CheckTheConnectionToFtpFtpsSftp;
use PlentyOne\Api\Requests\Catalog\CopyCatalog;
use PlentyOne\Api\Requests\Catalog\CopyCatalogFormat;
use PlentyOne\Api\Requests\Catalog\CreateCatalog;
use PlentyOne\Api\Requests\Catalog\DeleteCatalog;
use PlentyOne\Api\Requests\Catalog\ExportCatalog;
use PlentyOne\Api\Requests\Catalog\GenerateToken;
use PlentyOne\Api\Requests\Catalog\GetArchive;
use PlentyOne\Api\Requests\Catalog\GetCatalog;
use PlentyOne\Api\Requests\Catalog\GetCatalogContent;
use PlentyOne\Api\Requests\Catalog\GetCatalogStatus;
use PlentyOne\Api\Requests\Catalog\GetListOfCatalogStatuses;
use PlentyOne\Api\Requests\Catalog\GetPreviewCatalog;
use PlentyOne\Api\Requests\Catalog\GetPreviewVdiCatalog;
use PlentyOne\Api\Requests\Catalog\GetSingleStatusHistoryFile;
use PlentyOne\Api\Requests\Catalog\GetStatusData;
use PlentyOne\Api\Requests\Catalog\GetsCatalogByVersion;
use PlentyOne\Api\Requests\Catalog\GetsListOfCatalogs;
use PlentyOne\Api\Requests\Catalog\ImportCatalog;
use PlentyOne\Api\Requests\Catalog\ListStatusHistories;
use PlentyOne\Api\Requests\Catalog\ListStatusLogs;
use PlentyOne\Api\Requests\Catalog\ListStatusPerformances;
use PlentyOne\Api\Requests\Catalog\ListsCatalogVersions;
use PlentyOne\Api\Requests\Catalog\MigrateCatalogs;
use PlentyOne\Api\Requests\Catalog\RestoreArchivedCatalog;
use PlentyOne\Api\Requests\Catalog\RestoreVersionOfCatalog;
use PlentyOne\Api\Requests\Catalog\ReturnAvailableScheduleDaysList;
use PlentyOne\Api\Requests\Catalog\UpdateCatalog;
use PlentyOne\Api\Requests\Catalog\UpdateCatalogContent;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Catalog extends BaseResource
{
	public function getsListOfCatalogs(): Response
	{
		return $this->connector->send(new GetsListOfCatalogs());
	}


	public function createCatalog(): Response
	{
		return $this->connector->send(new CreateCatalog());
	}


	/**
	 * @param int $id
	 */
	public function activateOrDeactivateCatalog(int $id): Response
	{
		return $this->connector->send(new ActivateOrDeactivateCatalog($id));
	}


	public function getArchive(): Response
	{
		return $this->connector->send(new GetArchive());
	}


	/**
	 * @param int $id
	 */
	public function restoreArchivedCatalog(int $id): Response
	{
		return $this->connector->send(new RestoreArchivedCatalog($id));
	}


	public function copyCatalog(): Response
	{
		return $this->connector->send(new CopyCatalog());
	}


	public function importCatalog(): Response
	{
		return $this->connector->send(new ImportCatalog());
	}


	public function migrateCatalogs(): Response
	{
		return $this->connector->send(new MigrateCatalogs());
	}


	public function returnAvailableScheduleDaysList(): Response
	{
		return $this->connector->send(new ReturnAvailableScheduleDaysList());
	}


	public function generateToken(): Response
	{
		return $this->connector->send(new GenerateToken());
	}


	/**
	 * @param int $catalogId
	 */
	public function copyCatalogFormat(int $catalogId): Response
	{
		return $this->connector->send(new CopyCatalogFormat($catalogId));
	}


	/**
	 * @param int $id
	 */
	public function getCatalog(int $id): Response
	{
		return $this->connector->send(new GetCatalog($id));
	}


	/**
	 * @param int $id
	 */
	public function updateCatalog(int $id): Response
	{
		return $this->connector->send(new UpdateCatalog($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteCatalog(int $id): Response
	{
		return $this->connector->send(new DeleteCatalog($id));
	}


	/**
	 * @param int $id
	 */
	public function getCatalogContent(int $id): Response
	{
		return $this->connector->send(new GetCatalogContent($id));
	}


	/**
	 * @param int $id
	 */
	public function updateCatalogContent(int $id): Response
	{
		return $this->connector->send(new UpdateCatalogContent($id));
	}


	/**
	 * @param int $id
	 */
	public function exportCatalog(int $id): Response
	{
		return $this->connector->send(new ExportCatalog($id));
	}


	/**
	 * @param int $id
	 */
	public function getPreviewCatalog(int $id): Response
	{
		return $this->connector->send(new GetPreviewCatalog($id));
	}


	/**
	 * @param int $id
	 */
	public function getPreviewVdiCatalog(int $id): Response
	{
		return $this->connector->send(new GetPreviewVdiCatalog($id));
	}


	/**
	 * @param int $id
	 */
	public function buildPrivateDownloadUrl(int $id): Response
	{
		return $this->connector->send(new BuildPrivateDownloadUrl($id));
	}


	/**
	 * @param int $id
	 */
	public function buildPublicDownloadUrl(int $id): Response
	{
		return $this->connector->send(new BuildPublicDownloadUrl($id));
	}


	/**
	 * @param int $id
	 */
	public function listsCatalogVersions(int $id): Response
	{
		return $this->connector->send(new ListsCatalogVersions($id));
	}


	/**
	 * @param int $id
	 * @param int $versionId
	 */
	public function getsCatalogByVersion(int $id, int $versionId): Response
	{
		return $this->connector->send(new GetsCatalogByVersion($id, $versionId));
	}


	/**
	 * @param int $id
	 * @param int $versionId
	 */
	public function restoreVersionOfCatalog(int $id, int $versionId): Response
	{
		return $this->connector->send(new RestoreVersionOfCatalog($id, $versionId));
	}


	/**
	 * @param int $protocol
	 */
	public function checkTheConnectionToFtpFtpsSftp(int $protocol): Response
	{
		return $this->connector->send(new CheckTheConnectionToFtpFtpsSftp($protocol));
	}


	public function getListOfCatalogStatuses(): Response
	{
		return $this->connector->send(new GetListOfCatalogStatuses());
	}


	/**
	 * @param int $id
	 */
	public function getCatalogStatus(int $id): Response
	{
		return $this->connector->send(new GetCatalogStatus($id));
	}


	/**
	 * @param int $id
	 */
	public function getStatusData(int $id): Response
	{
		return $this->connector->send(new GetStatusData($id));
	}


	/**
	 * @param int $id
	 */
	public function listStatusHistories(int $id): Response
	{
		return $this->connector->send(new ListStatusHistories($id));
	}


	/**
	 * @param int $id
	 * @param int $filename
	 */
	public function getSingleStatusHistoryFile(int $id, int $filename): Response
	{
		return $this->connector->send(new GetSingleStatusHistoryFile($id, $filename));
	}


	/**
	 * @param int $id
	 */
	public function listStatusLogs(int $id): Response
	{
		return $this->connector->send(new ListStatusLogs($id));
	}


	/**
	 * @param int $id
	 */
	public function listStatusPerformances(int $id): Response
	{
		return $this->connector->send(new ListStatusPerformances($id));
	}


	/**
	 * @param int $statusId
	 */
	public function cancelExportRuns(int $statusId): Response
	{
		return $this->connector->send(new CancelExportRuns($statusId));
	}
}
