<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Sync\DeleteFilesFromSyncDocuments;
use PlentyOne\Api\Requests\Sync\GetSingleStorageObjectFromSyncDocuments;
use PlentyOne\Api\Requests\Sync\GetTemporaryUrlForSingleDocument;
use PlentyOne\Api\Requests\Sync\ListDocumentsForSingleSync;
use PlentyOne\Api\Requests\Sync\UploadDocumentToSyncDirectory;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Sync extends BaseResource
{
	/**
	 * @param string $key The storage key of the object to get from sync documents.
	 */
	public function getSingleStorageObjectFromSyncDocuments(string $key): Response
	{
		return $this->connector->send(new GetSingleStorageObjectFromSyncDocuments($key));
	}


	/**
	 * @param string $key The storage key for the file to upload
	 */
	public function uploadDocumentToSyncDirectory(string $key): Response
	{
		return $this->connector->send(new UploadDocumentToSyncDirectory($key));
	}


	/**
	 * @param string $key The storage key to get temporary url for
	 */
	public function getTemporaryUrlForSingleDocument(string $key): Response
	{
		return $this->connector->send(new GetTemporaryUrlForSingleDocument($key));
	}


	/**
	 * @param string $continuationToken token from previous request to continue listing documents
	 */
	public function listDocumentsForSingleSync(?string $continuationToken = null): Response
	{
		return $this->connector->send(new ListDocumentsForSingleSync($continuationToken));
	}


	/**
	 * @param array $keyList List of storage keys to delete
	 */
	public function deleteFilesFromSyncDocuments(array $keyList): Response
	{
		return $this->connector->send(new DeleteFilesFromSyncDocuments($keyList));
	}
}
