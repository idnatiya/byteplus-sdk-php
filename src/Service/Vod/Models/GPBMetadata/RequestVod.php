<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\GPBMetadata;

class RequestVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        $pool->internalAddGeneratedFile(
            '
�i
&byteplus/vod/request/request_vod.protoByteplus.Vod.Models.Request(byteplus/vod/business/vod_workflow.proto&byteplus/vod/business/vod_upload.proto"�
VodGetAllPlayInfoRequest
Vids (	
Formats (	
Codecs (	
Definitions (	
	FileTypes (	
	LogoTypes (	
NeedEncryptStream (	
Ssl (	

NeedThumbs	 (	
NeedBarrageMask
 (	
CdnType (	
	UnionInfo (	
	PlayScene (	
DrmExpireTimestamp (	
HDRType (	 
KeyFrameAlignmentVersion (	

UserAction (	
Quality (	
ForceExpire (	"�
VodGetPlayInfoRequest
Vid (	
Format (	
Codec (	

Definition (	
FileType (	
LogoType (	
Base64 (	
Ssl (	

NeedThumbs	 (	
NeedBarrageMask
 (	
CdnType (	
	UnionInfo (	
HDRDefinition (	
	PlayScene (	
DrmExpireTimestamp (	
Quality (	

PlayConfig (	
ForceExpire (	"g
VodGetPrivateDrmPlayAuthRequest
DrmType (	
Vid (	
PlayAuthIds (	
	UnionInfo (	"Q
VodGetHlsDecryptionKeyRequest
DrmAuthToken (	

Ak (	
Source (	"�
+VodGetPlayInfoWithLiveTimeShiftSceneRequest
	StoreUris (	
	SpaceName (	
Ssl (	
ExpireTimestamp (	
NeedComposeBucketName (	"k
VodUrlUploadRequest
	SpaceName (	A
URLSets (20.Byteplus.Vod.Models.Business.VodUrlUploadURLSet"/
VodQueryUploadTaskInfoRequest
JobIds (	"�
VodApplyUploadInfoRequest
	SpaceName (	

SessionKey (	
FileSize (
FileType (	
FileName (	
StorageClass (
FileExtension (	"�
VodUploadMediaRequest
	SpaceName (	
FilePath (	
CallbackArgs (	
	Functions (	
FileName (	
StorageClass (
FileExtension (	
VodUploadSource (	"�
VodUploadMaterialRequest
	SpaceName (	
FilePath (	
CallbackArgs (	
	Functions (	
FileType (	
FileName (	
FileExtension (	"�
VodCommitUploadInfoRequest
	SpaceName (	

SessionKey (	
CallbackArgs (	
	Functions (	
VodUploadSource (	"=
VodUrlUploadJsonRequest
	SpaceName (	
URLSets (	".
VodGetRecommendedPosterRequest
Vids (	"A
"VodUpdateMediaPublishStatusRequest
Vid (	
Status (	"n
!VodUpdateMediaStorageClassRequest
Vids (	
StorageClass (	
CallbackArgs (	
FileIds (	"�
VodUpdateMediaInfoRequest
Vid (	/
	PosterUri (2.google.protobuf.StringValue+
Title (2.google.protobuf.StringValue1
Description (2.google.protobuf.StringValue*
Tags (2.google.protobuf.StringValue5
ClassificationId (2.google.protobuf.Int64Value"\'
VodGetMediaInfosRequest
Vids (	";
VodDeleteMediaRequest
Vids (	
CallbackArgs (	"P
VodDeleteTranscodesRequest
Vid (	
FileIds (	
CallbackArgs (	"�
VodGetMediaListRequest
	SpaceName (	
Vid (	
Status (	
Order (	
Tags (	
	StartTime (	
EndTime (	
Offset (	
PageSize	 (	
ClassificationIds
 (	
TosStorageClasses (	
VodUploadSources (	"�
VodGetSubtitleInfoListRequest
Vid (	
FileIds (	
	Languages (	
Formats (	
LanguageIds (	
SubtitleIds (	
Status (	
Title (	
Tag	 (	
Offset
 (	
PageSize (	
Ssl (	"r
VodUpdateSubtitleStatusRequest
Vid (	
FileIds (	
	Languages (	
Formats (	
Status (	"�
VodUpdateSubtitleInfoRequest
Vid (	
FileId (	
Language (	
Format (	+
Title (2.google.protobuf.StringValue)
Tag (2.google.protobuf.StringValue"w
 VodGetAuditFramesForAuditRequest
Vid (	
Strategy (	
MinNumberOfFrames (	
MaxNumberOfFrames (	"�
VodGetMLFramesForAuditRequest
Vid (	
Strategy (	
FrameOpt (	
FrameFps (	
NumberOfFrames (	
CutTimeMills (	
NeedFirstFrame (	
NeedLastFrame (	
StartTimeMill	 (	
EndTimeMill
 (	
MinNumberOfFrames (	
MaxNumberOfFrames (	"U
!VodGetBetterFramesForAuditRequest
Vid (	
Strategy (	
	CoverRate (	"?
VodGetAudioInfoForAuditRequest
Vid (	
Strategy (	"P
/VodGetAutomaticSpeechRecognitionForAuditRequest
Vid (	
Strategy (	"I
(VodGetAudioEventDetectionForAuditRequest
Vid (	
Strategy (	"q
#VodCreateVideoClassificationRequest
	SpaceName (	
Level (
ParentId (
Classification (	"j
#VodUpdateVideoClassificationRequest
	SpaceName (	
ClassificationId (
Classification (	"R
#VodDeleteVideoClassificationRequest
	SpaceName (	
ClassificationId ("Q
"VodListVideoClassificationsRequest
	SpaceName (	
ClassificationId ("&
VodListSnapshotsRequest
Vid (	"Z
VodGetFileListRequest
	SpaceName (	
Prefix (	
Limit (	
Starter (	"-
VodExtractMediaMetaTaskRequest
Vid (	"�
VodStartWorkflowRequest
Vid (	

TemplateId (	;
Input (2,.Byteplus.Vod.Models.Business.WorkflowParams
Priority (
CallbackArgs (	
EnableLowPriority (:
	DirectUrl (2\'.Byteplus.Vod.Models.Business.DirectUrl

TaskListId (	"D
!VodRetrieveTranscodeResultRequest
Vid (	

ResultType (	"�
VodListWorkflowExecutionRequest
RunId (	
Vid (	
	SpaceName (	

TemplateId (	

TaskListId (	
EnableLowPriority (	
	JobSource (	
Status (	
	StartTime	 (	
EndTime
 (	
PageSize (	
Offset (	

OrderByKey (	
Order (	"5
$VodGetWorkflowExecutionDetailRequest
RunId (	",
VodGetWorkflowResultRequest
RunId (	"N
$VodGetWorkflowExecutionStatusRequest
RunId (	
NeedTasksDetail (	"�
#VodSubmitDirectEditTaskAsyncRequest
Uploader (	
Application (	
	EditParam (
Priority (
CallbackUri (	
CallbackArgs (	"/
VodGetDirectEditResultRequest
ReqIds (	"0
VodGetDirectEditProgressRequest
ReqId (	"v
VodCreateSpaceRequest
	SpaceName (	
ProjectName (	
Description (	
Region (	
UserName (	"-
VodGetSpaceDetailRequest
	SpaceName (	"4
VodListSpaceRequest
Offset (
Limit ("?
VodUpdateSpaceRequest
	SpaceName (	
Description (	"^
!VodUpdateSpaceUploadConfigRequest
	SpaceName (	
	ConfigKey (	
ConfigValue (	"�
%VodDescribeVodSpaceStorageDataRequest
	SpaceList (	
	StartTime (	
EndTime (	
Aggregation (
Type (	"i
VodStartDomainRequest
	SpaceName (	

DomainType (	
Domain (	
SourceStationType ("h
VodStopDomainRequest
	SpaceName (	

DomainType (	
Domain (	
SourceStationType ("c
%VodUpdateDomainPlayRuleRequestRequest
	SpaceName (	
DefaultDomain (	
PlayRule ("r
VodAddDomainToSchedulerRequest
	SpaceName (	

DomainType (	
Domain (	
SourceStationType ("w
#VodRemoveDomainFromSchedulerRequest
	SpaceName (	

DomainType (	
Domain (	
SourceStationType ("w
VodListDomainRequest
	SpaceName (	

DomainType (	
SourceStationType (
Offset (
Limit ("O
VodCreateCdnRefreshTaskRequest
	SpaceName (	
Urls (	
Type (	"A
VodCreateCdnPreloadTaskRequest
	SpaceName (	
Urls (	"�
VodListCdnTasksRequest
	SpaceName (	
TaskId (	

DomainName (	
TaskType (	
Status (	
StartTimestamp (
EndTimestamp (
PageNum (
PageSize	 ("n
VodListCdnAccessLogRequest
Domains (	
StartTimestamp (
EndTimestamp (
	SpaceName (	"p
VodListCdnTopAccessUrlRequest
Domains (	
StartTimestamp (
EndTimestamp (
SortType (	"�
(VodDescribeVodDomainBandwidthDataRequest

DomainList (	
	StartTime (	
EndTime (	
Aggregation (
BandwidthType (	
Area (	"�
VodListCdnUsageDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
DataType (	
Metric (	

NeedDetail (
Area (	
Region	 (	
Isp
 (	
Protocol (	
	IpVersion (	
BillingRegion (	"V
 VodListCdnUsageDataDetailRequest
Domain (	
	StartTime (
EndTime ("�
VodListCdnStatusDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
DataType (	
Metric (	

NeedDetail ("W
!VodListCdnStatusDataDetailRequest
Domain (	
	StartTime (
EndTime ("\'
VodDescribeIPInfoRequest
Ips (	"�
VodListCdnPvDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
DataType (	

NeedDetail ("�
VodListCdnHitrateDataRequest
Domains (	
Interval (	
StartTimestamp (
EndTimestamp (
Metric (	

NeedDetail ("�
&VodDescribeVodDomainTrafficDataRequest

DomainList (	
	StartTime (	
EndTime (	
Aggregation (
TrafficType (	"A
VodSubmitBlockTasksRequest
FileUrls (	
	Operation (	"�
VodGetContentBlockTasksRequest
Url (	
Domain (	
TaskID (	
TaskType (	
Status (	
	StartTime (
EndTime (
PageNum (
PageSize	 ("�
VodCreateDomainV2Request
	SpaceName (	

DomainType (	
Domain (	
SourceStationType ( 
SourceStationAddressType (
Origins (	
Area (	

BucketName	 (	"g
VodUpdateDomainExpireV2Request
	SpaceName (	

DomainType (	
Domain (	
Expire ("�
"VodUpdateDomainAuthConfigV2Request
	SpaceName (	

DomainType (	
Domain (	
MainKey (	
	BackupKey (	
Status (	"�
AddOrUpdateCertificateV2Request
	SpaceName (	
Domain (	

DomainType (	
CertificateId (	
HttpsStatus (	"X
!VodAddCallbackSubscriptionRequest
	SpaceName (	
Url (	
ContentType (	"h
VodSetCallbackEventRequest
	SpaceName (	
Events (	
AuthEnabled (	

PrivateKey (	"�
&VodGetSmartStrategyLitePlayInfoRequest
PlayUrl (	
Format (	
Codec (	

Definition (	
FileType (	
LogoType (	
Ssl (	

NeedThumbs (	
NeedBarrageMask	 (	
	UnionInfo
 (	
HDRDefinition (	"%
VodGetAppInfoRequest
AppId ("�
$DescribeVodSpaceTranscodeDataRequest
	SpaceList (	
	StartTime (	
EndTime (	
TranscodeType (	
Specification (	
TaskStageList (	
Aggregation (
DetailFieldList (	"�
#DescribeVodSpaceAIStatisDataRequest
	SpaceList (	
	StartTime (	
EndTime (	
MediaAiType (	
TaskStageList (	
Aggregation (
DetailFieldList (	"�
)DescribeVodSpaceSubtitleStatisDataRequest
	SpaceList (	
	StartTime (	
EndTime (	
SubtitleType (	
TaskStageList (	
Aggregation (
DetailFieldList (	"�
\'DescribeVodSpaceDetectStatisDataRequest
	SpaceList (	
	StartTime (	
EndTime (	

DetectType (	
TaskStageList (	
Aggregation (
DetailFieldList (	"�
DescribeVodSnapshotDataRequest
	SpaceList (	
	StartTime (	
EndTime (	
SnapshotType (	
TaskStageList (	
Aggregation (
DetailFieldList (	"�
)DescribeVodSpaceWorkflowDetailDataRequest
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum ("�
%DescribeVodSpaceEditDetailDataRequest
Region (	
Space (	
	StartTime (	
EndTime (	
PageSize (
PageNum ("_
%DescribeVodPlayFileLogByDomainRequest
	StartTime (	
EndTime (	

DomainList (	"]
$DescribeVodSpaceStorageDataFDRequest
	SpaceList (	
	StartTime (	
EndTime (	"A
VodSubmitBlockMediaTaskRequest
	SpaceName (	
Vids (	"C
 VodSubmitUnblockMediaTaskRequest
	SpaceName (	
Vids (	"B
VodQueryMediaBlockStatusRequest
	SpaceName (	
Vids (	"�
VodCreatePlaylistRequest
Name (	
Format (	
Codec (	

Definition (	
Vids (	
	StartTime (	
EndTime (	
Cycles (	"D
VodGetPlaylistsRequest
Ids (	
Limit (
Offset ("�
VodUpdatePlaylistRequest

Id (	*
Name (2.google.protobuf.StringValue,
Format (2.google.protobuf.StringValue+
Codec (2.google.protobuf.StringValue0

Definition (2.google.protobuf.StringValue*
Vids (2.google.protobuf.StringValue/
	StartTime (2.google.protobuf.StringValue-
EndTime (2.google.protobuf.StringValue,
Cycles	 (2.google.protobuf.StringValue"&
VodDeletePlaylistRequest

Id (	"B
VodSetIntertrustApiKeyRequest
	SpaceName (	
ApiKey (	"2
VodGetIntertrustApiKeyRequest
	SpaceName (	"5
 VodDeleteIntertrustApiKeyRequest
	SpaceName (	"�
VodSetFairPlayCertInfoRequest
	SpaceName (	
CertName (	
CertFile (	
PkFile (	
CertFileName (	

PkFileName (	

PkPassword (	
Ask (	"2
VodGetFairPlayCertInfoRequest
	SpaceName (	"5
 VodDeleteFairPlayCertInfoRequest
	SpaceName (	"+
VodGetFairPlayCertRequest
CertId (	"N
VodGetDrmLicenseRequest
Vid (	
Kid (	
ThirdPartyDrmType (	B�
&com.byteplus.service.vod.model.requestB
VodRequestPZFgithub.com/byteplus-sdk/byteplus-sdk-golang/service/vod/models/request���#Byteplus\\Service\\Vod\\Models\\Request�\'Byteplus\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

