<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScreenshotTask请求参数结构体
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method integer getEndTime() 获取截图任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。
 * @method void setEndTime(integer $EndTime) 设置截图任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。
 * @method integer getTemplateId() 获取截图模板ID，CreateLiveSnapshotTemplate 返回值。如果传入错误ID，则不拉起截图。
 * @method void setTemplateId(integer $TemplateId) 设置截图模板ID，CreateLiveSnapshotTemplate 返回值。如果传入错误ID，则不拉起截图。
 * @method integer getStartTime() 获取截图任务开始时间，Unix时间戳。如果不填表示立即启动截图。EndTime - StartTime不能超过24小时。
 * @method void setStartTime(integer $StartTime) 设置截图任务开始时间，Unix时间戳。如果不填表示立即启动截图。EndTime - StartTime不能超过24小时。
 * @method integer getStreamType() 获取推流类型，默认0。取值：
0-直播推流。
1-合成流，即 A+B=C 类型混流。
 * @method void setStreamType(integer $StreamType) 设置推流类型，默认0。取值：
0-直播推流。
1-合成流，即 A+B=C 类型混流。
 * @method string getExtension() 获取扩展字段，暂无定义。默认为空。
 * @method void setExtension(string $Extension) 设置扩展字段，暂无定义。默认为空。
 */
class CreateScreenshotTaskRequest extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var integer 截图任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。
     */
    public $EndTime;

    /**
     * @var integer 截图模板ID，CreateLiveSnapshotTemplate 返回值。如果传入错误ID，则不拉起截图。
     */
    public $TemplateId;

    /**
     * @var integer 截图任务开始时间，Unix时间戳。如果不填表示立即启动截图。EndTime - StartTime不能超过24小时。
     */
    public $StartTime;

    /**
     * @var integer 推流类型，默认0。取值：
0-直播推流。
1-合成流，即 A+B=C 类型混流。
     */
    public $StreamType;

    /**
     * @var string 扩展字段，暂无定义。默认为空。
     */
    public $Extension;

    /**
     * @param string $StreamName 流名称。
     * @param string $DomainName 推流域名。
     * @param string $AppName 推流路径。
     * @param integer $EndTime 截图任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。
     * @param integer $TemplateId 截图模板ID，CreateLiveSnapshotTemplate 返回值。如果传入错误ID，则不拉起截图。
     * @param integer $StartTime 截图任务开始时间，Unix时间戳。如果不填表示立即启动截图。EndTime - StartTime不能超过24小时。
     * @param integer $StreamType 推流类型，默认0。取值：
0-直播推流。
1-合成流，即 A+B=C 类型混流。
     * @param string $Extension 扩展字段，暂无定义。默认为空。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
