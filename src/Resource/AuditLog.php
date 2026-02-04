<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\AuditLog\GetAuditLogSystemConfig;
use PlentyOne\Api\Requests\AuditLog\GetAvailableAuditLogArchives;
use PlentyOne\Api\Requests\AuditLog\GetAvailableAuditLogEntities;
use PlentyOne\Api\Requests\AuditLog\GetTheDownloadUrlForRestoredAuditLogArchive;
use PlentyOne\Api\Requests\AuditLog\GetTheDownloadUrlForRestoredAuditLogFile;
use PlentyOne\Api\Requests\AuditLog\RestoreAuditLogArchive;
use PlentyOne\Api\Requests\AuditLog\WriteTheSystemConfig;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AuditLog extends BaseResource
{
	public function getAvailableAuditLogArchives(): Response
	{
		return $this->connector->send(new GetAvailableAuditLogArchives());
	}


	/**
	 * @param int $key
	 */
	public function restoreAuditLogArchive(int $key): Response
	{
		return $this->connector->send(new RestoreAuditLogArchive($key));
	}


	/**
	 * @param int $key
	 */
	public function getTheDownloadUrlForRestoredAuditLogArchive(int $key): Response
	{
		return $this->connector->send(new GetTheDownloadUrlForRestoredAuditLogArchive($key));
	}


	public function getAvailableAuditLogEntities(): Response
	{
		return $this->connector->send(new GetAvailableAuditLogEntities());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getAvailableAuditLogEntitiesDuplicate1(): Response
	{
		return $this->connector->send(new GetAvailableAuditLogEntities());
	}


	/**
	 * @param int $key
	 */
	public function getTheDownloadUrlForRestoredAuditLogFile(int $key): Response
	{
		return $this->connector->send(new GetTheDownloadUrlForRestoredAuditLogFile($key));
	}


	public function getAuditLogSystemConfig(): Response
	{
		return $this->connector->send(new GetAuditLogSystemConfig());
	}


	public function writeTheSystemConfig(): Response
	{
		return $this->connector->send(new WriteTheSystemConfig());
	}
}
