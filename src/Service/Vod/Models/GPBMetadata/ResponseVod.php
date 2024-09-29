<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/response/response_vod.proto

namespace Byteplus\Service\Vod\Models\GPBMetadata;

class ResponseVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Byteplus\Service\Base\Models\GPBMetadata\Base::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodEdit::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodSpace::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodSmartStrategy::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodAppsManage::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(byteplus/vod/response/response_vod.protoByteplus.Vod.Models.Response$byteplus/vod/business/vod_play.proto%byteplus/vod/business/vod_media.proto&byteplus/vod/business/vod_upload.proto(byteplus/vod/business/vod_workflow.proto$byteplus/vod/business/vod_edit.proto%byteplus/vod/business/vod_space.proto#byteplus/vod/business/vod_cdn.proto&byteplus/vod/business/vod_common.proto.byteplus/vod/business/vod_smart_strategy.proto+byteplus/vod/business/vod_apps_manage.proto\'byteplus/vod/business/vod_measure.proto"�
VodGetAllPlayInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataB
Result (22.Byteplus.Vod.Models.Business.VodAllPlayInfoResult"�
VodGetPlayInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata>
Result (2..Byteplus.Vod.Models.Business.VodPlayInfoModel"�
VodGetOriginalPlayInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodGetOriginalPlayInfoResult"�
 VodGetPrivateDrmPlayAuthResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataL
Result (2<.Byteplus.Vod.Models.Business.VodGetPrivateDrmPlayAuthResult"�
VodGetHlsDecryptionKeyResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodGetHlsDecryptionKeyResult"�
,VodGetPlayInfoWithLiveTimeShiftSceneResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataX
Result (2H.Byteplus.Vod.Models.Business.VodGetPlayInfoWithLiveTimeShiftSceneResult"�
VodUploadMediaResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata;
Result (2+.Byteplus.Vod.Models.Business.VodCommitData"�
VodQueryUploadTaskInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata:
Result (2*.Byteplus.Vod.Models.Business.VodQueryData"�
VodUrlUploadResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata@
Result (20.Byteplus.Vod.Models.Business.VodUrlResponseData"�
VodApplyUploadInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataF
Result (26.Byteplus.Vod.Models.Business.VodApplyUploadInfoResult"�
VodCommitUploadInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataG
Result (27.Byteplus.Vod.Models.Business.VodCommitUploadInfoResult"�
VodGetMediaInfosResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataB
Result (22.Byteplus.Vod.Models.Business.VodGetMediaInfosData"c
VodUpdateMediaInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodGetRecommendedPosterResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataA
Result (21.Byteplus.Vod.Models.Business.VodGetRecPosterData"l
#VodUpdateMediaPublishStatusResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
"VodUpdateMediaStorageClassResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataL
Result (2<.Byteplus.Vod.Models.Business.VodUpdateMediaStorageClassData"�
VodDeleteMediaResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata@
Result (20.Byteplus.Vod.Models.Business.VodDeleteMediaData"�
VodDeleteTranscodesResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataE
Result (25.Byteplus.Vod.Models.Business.VodDeleteTranscodesData"�
VodGetMediaListResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataA
Result (21.Byteplus.Vod.Models.Business.VodGetMediaListData"�
VodGetSubtitleInfoListResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataH
Result (28.Byteplus.Vod.Models.Business.VodGetSubtitleInfoListData"�
VodUpdateSubtitleStatusResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataI
Result (29.Byteplus.Vod.Models.Business.VodUpdateSubtitleStatusData"f
VodUpdateSubtitleInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
!VodGetAuditFramesForAuditResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataH
Result (28.Byteplus.Vod.Models.Business.VodGetFramesForAuditResult"�
VodGetMLFramesForAuditResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataH
Result (28.Byteplus.Vod.Models.Business.VodGetFramesForAuditResult"�
"VodGetBetterFramesForAuditResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataN
Result (2>.Byteplus.Vod.Models.Business.VodGetBetterFramesForAuditResult"�
VodGetAudioInfoForAuditResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataK
Result (2;.Byteplus.Vod.Models.Business.VodGetAudioInfoForAuditResult"�
0VodGetAutomaticSpeechRecognitionForAuditResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata\\
Result (2L.Byteplus.Vod.Models.Business.VodGetAutomaticSpeechRecognitionForAuditResult"�
)VodGetAudioEventDetectionForAuditResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataU
Result (2E.Byteplus.Vod.Models.Business.VodGetAudioEventDetectionForAuditResult"�
$VodCreateVideoClassificationResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataN
Result (2>.Byteplus.Vod.Models.Business.VodCreateVideoClassificationData"m
$VodUpdateVideoClassificationResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"m
$VodDeleteVideoClassificationResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
#VodListVideoClassificationsResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataI
Result (29.Byteplus.Vod.Models.Business.VodVideoClassificationsData"�
VodListSnapshotsResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata=
Result (2-.Byteplus.Vod.Models.Business.VodSnapshotData"�
VodGetFileListResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataB
Result (22.Byteplus.Vod.Models.Business.VodGetMediaInfosData"h
VodExtractMediaMetaTaskResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodStartWorkflowResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataD
Result (24.Byteplus.Vod.Models.Business.VodStartWorkflowResult"�
"VodRetrieveTranscodeResultResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata=
Result (2-.Byteplus.Vod.Models.Business.TranscodeResult"�
 VodListWorkflowExecutionResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataL
Result (2<.Byteplus.Vod.Models.Business.VodListWorkflowExecutionResult"�
%VodGetWorkflowExecutionDetailResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataQ
Result (2A.Byteplus.Vod.Models.Business.VodGetWorkflowExecutionDetailResult"�
%VodGetWorkflowExecutionStatusResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata?
Result (2/.Byteplus.Vod.Models.Business.WorkflowExecution"�
VodGetWorkflowResultResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata?
Result (2/.Byteplus.Vod.Models.Business.VodWorkflowResult"�
$VodSubmitDirectEditTaskAsyncResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataM
Result (2=.Byteplus.Vod.Models.Business.SubmitDirectEditTaskAsyncResult"�
 VodGetDirectEditProgressResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataC
Result (23.Byteplus.Vod.Models.Business.GetDirectEditProgress"�
VodGetDirectEditResultResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataA
Result (21.Byteplus.Vod.Models.Business.GetDirectEditResult"_
VodCreateSpaceResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodListSpaceResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata:
Result (2*.Byteplus.Vod.Models.Business.VodSpaceInfo"�
VodGetSpaceDetailResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata:
Result (2*.Byteplus.Vod.Models.Business.VodSpaceInfo"_
VodUpdateSpaceResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"k
"VodUpdateSpaceUploadConfigResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
&VodDescribeVodSpaceStorageDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataR
Result (2B.Byteplus.Vod.Models.Business.VodDescribeVodSpaceStorageDataResult"_
VodStartDomainResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"^
VodStopDomainResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"h
VodUpdateDomainPlayRuleResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"h
VodAddDomainToSchedulerResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"m
$VodRemoveDomainFromSchedulerResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodListDomainResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataA
Result (21.Byteplus.Vod.Models.Business.VodDomainConfigInfo"�
VodCreateCdnRefreshTaskResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataD
Result (24.Byteplus.Vod.Models.Business.VodCreateCdnTaskResult"�
VodCreateCdnPreloadTaskResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataD
Result (24.Byteplus.Vod.Models.Business.VodCreateCdnTaskResult"�
VodListCdnTasksResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata>
Result (2..Byteplus.Vod.Models.Business.VodCdnTaskResult"�
VodListCdnAccessLogResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataG
Result (27.Byteplus.Vod.Models.Business.VodListCdnAccessLogResult"�
VodListCdnTopAccessUrlResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodListCdnTopAccessUrlResult"�
)VodDescribeVodDomainBandwidthDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataU
Result (2E.Byteplus.Vod.Models.Business.VodDescribeVodDomainBandwidthDataResult"�
VodCdnStatisticsCommonResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodCdnStatisticsCommonResult"�
!VodListCdnUsageDataDetailResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataM
Result (2=.Byteplus.Vod.Models.Business.VodListCdnUsageDataDetailResult"�
"VodListCdnStatusDataDetailResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataN
Result (2>.Byteplus.Vod.Models.Business.VodListCdnStatusDataDetailResult"�
VodDescribeIPInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata:
Result (2*.Byteplus.Vod.Models.Business.VodCdnIpInfo"�
\'VodDescribeVodDomainTrafficDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataS
Result (2C.Byteplus.Vod.Models.Business.VodDescribeVodDomainTrafficDataResult"�
VodSubmitBlockTasksResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataG
Result (27.Byteplus.Vod.Models.Business.VodSubmitBlockTasksResult"�
VodGetContentBlockTasksResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataK
Result (2;.Byteplus.Vod.Models.Business.VodGetContentBlockTasksResult"b
VodCreateDomainV2ResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"h
VodUpdateDomainExpireV2ResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"l
#VodUpdateDomainAuthConfigV2ResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"i
 AddOrUpdateCertificateV2ResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"k
"VodAddCallbackSubscriptionResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"d
VodSetCallbackEventResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
\'VodGetSmartStrategyLitePlayInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataS
Result (2C.Byteplus.Vod.Models.Business.VodGetSmartStrategyLitePlayInfoResult"�
VodGetAppInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataA
Result (21.Byteplus.Vod.Models.Business.VodGetAppInfoResult"�
%DescribeVodSpaceTranscodeDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataQ
Result (2A.Byteplus.Vod.Models.Business.DescribeVodSpaceTranscodeDataResult"�
$DescribeVodSpaceAIStatisDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataP
Result (2@.Byteplus.Vod.Models.Business.DescribeVodSpaceAIStatisDataResult"�
*DescribeVodSpaceSubtitleStatisDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataV
Result (2F.Byteplus.Vod.Models.Business.DescribeVodSpaceSubtitleStatisDataResult"�
(DescribeVodSpaceDetectStatisDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataT
Result (2D.Byteplus.Vod.Models.Business.DescribeVodSpaceDetectStatisDataResult"�
DescribeVodSnapshotDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataK
Result (2;.Byteplus.Vod.Models.Business.DescribeVodSnapshotDataResult"�
*DescribeVodSpaceWorkflowDetailDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataV
Result (2F.Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowDetailDataResult"�
&DescribeVodSpaceEditDetailDataResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataR
Result (2B.Byteplus.Vod.Models.Business.DescribeVodSpaceEditDetailDataResult"�
&DescribeVodPlayFileLogByDomainResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataR
Result (2B.Byteplus.Vod.Models.Business.DescribeVodPlayFileLogByDomainResult"�
%DescribeVodSpaceStorageDataFDResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataQ
Result (2A.Byteplus.Vod.Models.Business.DescribeVodSpaceStorageDataFDResult"�
VodSubmitBlockMediaTaskResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataK
Result (2;.Byteplus.Vod.Models.Business.VodSubmitBlockMediaTaskResult"�
!VodSubmitUnblockMediaTaskResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataM
Result (2=.Byteplus.Vod.Models.Business.VodSubmitUnblockMediaTaskResult"�
 VodQueryMediaBlockStatusResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataL
Result (2<.Byteplus.Vod.Models.Business.VodQueryMediaBlockStatusResult"�
VodCreatePlaylistResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataE
Result (25.Byteplus.Vod.Models.Business.VodCreatePlaylistResult"�
VodGetPlaylistsResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataC
Result (23.Byteplus.Vod.Models.Business.VodGetPlaylistsResult"b
VodUpdatePlaylistResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"b
VodDeletePlaylistResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodGetIntertrustApiKeyResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodGetIntertrustApiKeyResult"g
VodSetIntertrustApiKeyResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"j
!VodDeleteIntertrustApiKeyResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodGetFairPlayCertInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodGetFairPlayCertInfoResult"�
VodSetFairPlayCertInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataJ
Result (2:.Byteplus.Vod.Models.Business.VodSetFairPlayCertInfoResult"j
!VodDeleteFairPlayCertInfoResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadata"�
VodGetFairPlayCertResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataF
Result (26.Byteplus.Vod.Models.Business.VodGetFairPlayCertResult"�
VodGetDrmLicenseResponseE
ResponseMetadata (2+.Byteplus.Base.Models.Base.ResponseMetadataA
Result (21.Byteplus.Vod.Models.Business.VodDrmLicenseResultB�
\'com.byteplus.service.vod.model.responseBVodResponsePZGgithub.com/byteplus-sdk/byteplus-sdk-golang/service/vod/models/response���$Byteplus\\Service\\Vod\\Models\\Response�\'Byteplus\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

