<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\ElasticSync\CheckReportLog;
use PlentyOne\Api\Requests\ElasticSync\CopyOneOrMoreMappings;
use PlentyOne\Api\Requests\ElasticSync\CopyTheSyncs;
use PlentyOne\Api\Requests\ElasticSync\CreateSync;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMapping;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMappingFilter;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMappingFilters;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMappingRow;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMappingRows;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMatches;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncMatching;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncOption;
use PlentyOne\Api\Requests\ElasticSync\CreateSyncOptions;
use PlentyOne\Api\Requests\ElasticSync\DeleteOneOrMoreMappings;
use PlentyOne\Api\Requests\ElasticSync\DeleteSync;
use PlentyOne\Api\Requests\ElasticSync\DeleteSyncMapping;
use PlentyOne\Api\Requests\ElasticSync\DeleteSyncMappingRow;
use PlentyOne\Api\Requests\ElasticSync\DeleteSyncMatching;
use PlentyOne\Api\Requests\ElasticSync\DeleteSyncs;
use PlentyOne\Api\Requests\ElasticSync\ExecuteTheRunProcedure;
use PlentyOne\Api\Requests\ElasticSync\ExportTheSync;
use PlentyOne\Api\Requests\ElasticSync\ExportTheSyncs;
use PlentyOne\Api\Requests\ElasticSync\GetAllSyncs;
use PlentyOne\Api\Requests\ElasticSync\GetComputedPreviewOfMappedTargets;
use PlentyOne\Api\Requests\ElasticSync\GetEntity;
use PlentyOne\Api\Requests\ElasticSync\GetListOfAllMappingsForParticularSyncType;
use PlentyOne\Api\Requests\ElasticSync\GetListOfDecimals;
use PlentyOne\Api\Requests\ElasticSync\GetListOfSyncIntervals;
use PlentyOne\Api\Requests\ElasticSync\GetListOfSyncTypes;
use PlentyOne\Api\Requests\ElasticSync\GetListWithVariationMatches;
use PlentyOne\Api\Requests\ElasticSync\GetLogById;
use PlentyOne\Api\Requests\ElasticSync\GetPreviewOfCsvValues;
use PlentyOne\Api\Requests\ElasticSync\GetScheduleTimes;
use PlentyOne\Api\Requests\ElasticSync\GetSync;
use PlentyOne\Api\Requests\ElasticSync\GetSyncMapping;
use PlentyOne\Api\Requests\ElasticSync\GetSyncMappingRow;
use PlentyOne\Api\Requests\ElasticSync\GetSyncMatching;
use PlentyOne\Api\Requests\ElasticSync\GetSyncsStatus;
use PlentyOne\Api\Requests\ElasticSync\GetTheCsvColumnsOfSync;
use PlentyOne\Api\Requests\ElasticSync\GetTheCsvRows;
use PlentyOne\Api\Requests\ElasticSync\GetTheLabelListForMappingFiltration;
use PlentyOne\Api\Requests\ElasticSync\GetTheListOfJobsForLiveImport;
use PlentyOne\Api\Requests\ElasticSync\GetTheMappingValues;
use PlentyOne\Api\Requests\ElasticSync\GetTheMappingValuesTree;
use PlentyOne\Api\Requests\ElasticSync\GetTheModelKeyToFieldValueKey;
use PlentyOne\Api\Requests\ElasticSync\GetThePlentyFieldsValueMapForParticularSyncType;
use PlentyOne\Api\Requests\ElasticSync\ImportPageForLiveImport;
use PlentyOne\Api\Requests\ElasticSync\ImportTheSyncWithDifferentPlentyId;
use PlentyOne\Api\Requests\ElasticSync\InitiateQueueLiveImport;
use PlentyOne\Api\Requests\ElasticSync\ListSyncMappingRows;
use PlentyOne\Api\Requests\ElasticSync\ListSyncMappings;
use PlentyOne\Api\Requests\ElasticSync\ListSyncMatches;
use PlentyOne\Api\Requests\ElasticSync\ListSyncs;
use PlentyOne\Api\Requests\ElasticSync\PreviewTheSyncs;
use PlentyOne\Api\Requests\ElasticSync\ResetTheCache;
use PlentyOne\Api\Requests\ElasticSync\SaveTheCsvOnS3;
use PlentyOne\Api\Requests\ElasticSync\UpdateSync;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMapping;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMappingFilter;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMappingFilters;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMappingRow;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMappingRows;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMatches;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncMatching;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncOption;
use PlentyOne\Api\Requests\ElasticSync\UpdateSyncOptions;
use PlentyOne\Api\Requests\ElasticSync\UpdateTheCsvOfSync;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ElasticSync extends BaseResource
{
	/**
	 * @param int $syncId The id of the sync
	 */
	public function getTheCsvRows(int $syncId): Response
	{
		return $this->connector->send(new GetTheCsvRows($syncId));
	}


	/**
	 * @param string $syncType The sync type
	 */
	public function getThePlentyFieldsValueMapForParticularSyncType(string $syncType): Response
	{
		return $this->connector->send(new GetThePlentyFieldsValueMapForParticularSyncType($syncType));
	}


	public function getTheLabelListForMappingFiltration(): Response
	{
		return $this->connector->send(new GetTheLabelListForMappingFiltration());
	}


	/**
	 * @param int $syncId The sync id of the mapping
	 */
	public function getTheCsvColumnsOfSync(int $syncId): Response
	{
		return $this->connector->send(new GetTheCsvColumnsOfSync($syncId));
	}


	public function getTheMappingValuesTree(): Response
	{
		return $this->connector->send(new GetTheMappingValuesTree());
	}


	/**
	 * @param string $syncType The sync type
	 */
	public function getTheModelKeyToFieldValueKey(string $syncType): Response
	{
		return $this->connector->send(new GetTheModelKeyToFieldValueKey($syncType));
	}


	/**
	 * @param int $syncType
	 * @param string $syncType The sync type
	 */
	public function getTheMappingValues(string $syncType): Response
	{
		return $this->connector->send(new GetTheMappingValues($syncType, $syncType));
	}


	public function getListWithVariationMatches(): Response
	{
		return $this->connector->send(new GetListWithVariationMatches());
	}


	public function createSync(): Response
	{
		return $this->connector->send(new CreateSync());
	}


	public function updateTheCsvOfSync(): Response
	{
		return $this->connector->send(new UpdateTheCsvOfSync());
	}


	/**
	 * @param array $file The file data
	 */
	public function saveTheCsvOnS3(array $file): Response
	{
		return $this->connector->send(new SaveTheCsvOnS3($file));
	}


	/**
	 * @param array $file The file data
	 */
	public function importTheSyncWithDifferentPlentyId(array $file): Response
	{
		return $this->connector->send(new ImportTheSyncWithDifferentPlentyId($file));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param array $file The file data
	 */
	public function saveTheCsvOnS3duplicate1(array $file): Response
	{
		return $this->connector->send(new SaveTheCsvOnS3($file));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param array $file The file data
	 */
	public function importTheSyncWithDifferentPlentyIdDuplicate2(array $file): Response
	{
		return $this->connector->send(new ImportTheSyncWithDifferentPlentyId($file));
	}


	public function getListOfSyncIntervals(): Response
	{
		return $this->connector->send(new GetListOfSyncIntervals());
	}


	/**
	 * @param int $filterId
	 */
	public function getSyncMapping(int $filterId): Response
	{
		return $this->connector->send(new GetSyncMapping($filterId));
	}


	/**
	 * @param int $filterId
	 */
	public function updateSyncMappingFilter(int $filterId): Response
	{
		return $this->connector->send(new UpdateSyncMappingFilter($filterId));
	}


	/**
	 * @param int $filterId
	 */
	public function deleteSyncMapping(int $filterId): Response
	{
		return $this->connector->send(new DeleteSyncMapping($filterId));
	}


	/**
	 * @param int $rowId
	 */
	public function getSyncMappingRow(int $rowId): Response
	{
		return $this->connector->send(new GetSyncMappingRow($rowId));
	}


	/**
	 * @param int $rowId
	 */
	public function updateSyncMappingRow(int $rowId): Response
	{
		return $this->connector->send(new UpdateSyncMappingRow($rowId));
	}


	/**
	 * @param int $rowId
	 */
	public function deleteSyncMappingRow(int $rowId): Response
	{
		return $this->connector->send(new DeleteSyncMappingRow($rowId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $mappingId
	 */
	public function getSyncMappingDuplicate3(int $mappingId): Response
	{
		return $this->connector->send(new GetSyncMapping($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function updateSyncMapping(int $mappingId): Response
	{
		return $this->connector->send(new UpdateSyncMapping($mappingId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $mappingId
	 */
	public function deleteSyncMappingDuplicate4(int $mappingId): Response
	{
		return $this->connector->send(new DeleteSyncMapping($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function createSyncMappingFilter(int $mappingId): Response
	{
		return $this->connector->send(new CreateSyncMappingFilter($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function listSyncMappings(int $mappingId): Response
	{
		return $this->connector->send(new ListSyncMappings($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function updateSyncMappingFilters(int $mappingId): Response
	{
		return $this->connector->send(new UpdateSyncMappingFilters($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function createSyncMappingFilters(int $mappingId): Response
	{
		return $this->connector->send(new CreateSyncMappingFilters($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function createSyncMappingRow(int $mappingId): Response
	{
		return $this->connector->send(new CreateSyncMappingRow($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function listSyncMappingRows(int $mappingId): Response
	{
		return $this->connector->send(new ListSyncMappingRows($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function updateSyncMappingRows(int $mappingId): Response
	{
		return $this->connector->send(new UpdateSyncMappingRows($mappingId));
	}


	/**
	 * @param int $mappingId
	 */
	public function createSyncMappingRows(int $mappingId): Response
	{
		return $this->connector->send(new CreateSyncMappingRows($mappingId));
	}


	public function deleteOneOrMoreMappings(): Response
	{
		return $this->connector->send(new DeleteOneOrMoreMappings());
	}


	public function copyOneOrMoreMappings(): Response
	{
		return $this->connector->send(new CopyOneOrMoreMappings());
	}


	public function getListOfDecimals(): Response
	{
		return $this->connector->send(new GetListOfDecimals());
	}


	/**
	 * @param int $matchingId
	 */
	public function getSyncMatching(int $matchingId): Response
	{
		return $this->connector->send(new GetSyncMatching($matchingId));
	}


	/**
	 * @param int $matchingId
	 */
	public function updateSyncMatching(int $matchingId): Response
	{
		return $this->connector->send(new UpdateSyncMatching($matchingId));
	}


	/**
	 * @param int $matchingId
	 */
	public function deleteSyncMatching(int $matchingId): Response
	{
		return $this->connector->send(new DeleteSyncMatching($matchingId));
	}


	/**
	 * @param int $optionId
	 */
	public function getSync(int $optionId): Response
	{
		return $this->connector->send(new GetSync($optionId));
	}


	/**
	 * @param int $optionId
	 */
	public function updateSyncOption(int $optionId): Response
	{
		return $this->connector->send(new UpdateSyncOption($optionId));
	}


	/**
	 * @param int $optionId
	 */
	public function deleteSync(int $optionId): Response
	{
		return $this->connector->send(new DeleteSync($optionId));
	}


	/**
	 * @param int $id
	 */
	public function getLogById(int $id): Response
	{
		return $this->connector->send(new GetLogById($id));
	}


	public function checkReportLog(): Response
	{
		return $this->connector->send(new CheckReportLog());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function checkReportLogDuplicate5(): Response
	{
		return $this->connector->send(new CheckReportLog());
	}


	public function resetTheCache(): Response
	{
		return $this->connector->send(new ResetTheCache());
	}


	public function getScheduleTimes(): Response
	{
		return $this->connector->send(new GetScheduleTimes());
	}


	public function getSyncsStatus(): Response
	{
		return $this->connector->send(new GetSyncsStatus());
	}


	public function getListOfSyncTypes(): Response
	{
		return $this->connector->send(new GetListOfSyncTypes());
	}


	/**
	 * @param int $statusId
	 * @param int $syncId
	 * @param int $page
	 */
	public function importPageForLiveImport(int $statusId, int $syncId, int $page): Response
	{
		return $this->connector->send(new ImportPageForLiveImport($statusId, $syncId, $page));
	}


	/**
	 * @param int $statusId
	 */
	public function getTheListOfJobsForLiveImport(int $statusId): Response
	{
		return $this->connector->send(new GetTheListOfJobsForLiveImport($statusId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $syncId
	 */
	public function getSyncDuplicate6(int $syncId): Response
	{
		return $this->connector->send(new GetSync($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function updateSync(int $syncId): Response
	{
		return $this->connector->send(new UpdateSync($syncId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $syncId
	 */
	public function deleteSyncDuplicate7(int $syncId): Response
	{
		return $this->connector->send(new DeleteSync($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function initiateQueueLiveImport(int $syncId): Response
	{
		return $this->connector->send(new InitiateQueueLiveImport($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function createSyncMapping(int $syncId): Response
	{
		return $this->connector->send(new CreateSyncMapping($syncId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $syncId
	 */
	public function listSyncMappingsDuplicate8(int $syncId): Response
	{
		return $this->connector->send(new ListSyncMappings($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function listSyncMatches(int $syncId): Response
	{
		return $this->connector->send(new ListSyncMatches($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function updateSyncMatches(int $syncId): Response
	{
		return $this->connector->send(new UpdateSyncMatches($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function createSyncMatches(int $syncId): Response
	{
		return $this->connector->send(new CreateSyncMatches($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function createSyncMatching(int $syncId): Response
	{
		return $this->connector->send(new CreateSyncMatching($syncId));
	}


	/**
	 * @param int $syncId The sync ID of the mapping
	 */
	public function getEntity(int $syncId): Response
	{
		return $this->connector->send(new GetEntity($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function createSyncOption(int $syncId): Response
	{
		return $this->connector->send(new CreateSyncOption($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function listSyncs(int $syncId): Response
	{
		return $this->connector->send(new ListSyncs($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function updateSyncOptions(int $syncId): Response
	{
		return $this->connector->send(new UpdateSyncOptions($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function createSyncOptions(int $syncId): Response
	{
		return $this->connector->send(new CreateSyncOptions($syncId));
	}


	/**
	 * @param int $syncId
	 */
	public function getComputedPreviewOfMappedTargets(int $syncId): Response
	{
		return $this->connector->send(new GetComputedPreviewOfMappedTargets($syncId));
	}


	/**
	 * @param int $syncId The id of the sync
	 */
	public function getPreviewOfCsvValues(int $syncId): Response
	{
		return $this->connector->send(new GetPreviewOfCsvValues($syncId));
	}


	/**
	 * @param int $syncId The ID of the sync
	 * @param int $testrun The test run variable
	 */
	public function executeTheRunProcedure(int $syncId, int $testrun): Response
	{
		return $this->connector->send(new ExecuteTheRunProcedure($syncId, $testrun));
	}


	/**
	 * @param int $syncId
	 */
	public function previewTheSyncs(int $syncId): Response
	{
		return $this->connector->send(new PreviewTheSyncs($syncId));
	}


	/**
	 * @param int $syncType
	 * @param string $syncType The sync type of the matching
	 */
	public function getListOfAllMappingsForParticularSyncType(string $syncType): Response
	{
		return $this->connector->send(new GetListOfAllMappingsForParticularSyncType($syncType, $syncType));
	}


	public function getAllSyncs(): Response
	{
		return $this->connector->send(new GetAllSyncs());
	}


	public function deleteSyncs(): Response
	{
		return $this->connector->send(new DeleteSyncs());
	}


	public function copyTheSyncs(): Response
	{
		return $this->connector->send(new CopyTheSyncs());
	}


	/**
	 * @param int $syncIds The ID of the sync
	 */
	public function exportTheSyncs(int $syncIds): Response
	{
		return $this->connector->send(new ExportTheSyncs($syncIds));
	}


	/**
	 * @param int $syncId
	 * @param int $syncIds The ID of the sync
	 */
	public function exportTheSync(int $syncId, int $syncIds): Response
	{
		return $this->connector->send(new ExportTheSync($syncId, $syncIds));
	}
}
