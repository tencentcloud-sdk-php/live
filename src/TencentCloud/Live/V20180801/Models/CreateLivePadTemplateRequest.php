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
 * CreateLivePadTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
 * @method string getUrl() 获取垫片内容。
 * @method void setUrl(string $Url) 设置垫片内容。
 * @method string getDescription() 获取描述信息。
长度上限：1024字节。
仅支持中文、英文、数字、_、-。
 * @method void setDescription(string $Description) 设置描述信息。
长度上限：1024字节。
仅支持中文、英文、数字、_、-。
 * @method integer getWaitDuration() 获取断流等待时间。
取值范围：0-30000。
单位：ms。
 * @method void setWaitDuration(integer $WaitDuration) 设置断流等待时间。
取值范围：0-30000。
单位：ms。
 * @method integer getMaxDuration() 获取最大垫片时长。
取值范围：0 - 正无穷。
单位：ms。
 * @method void setMaxDuration(integer $MaxDuration) 设置最大垫片时长。
取值范围：0 - 正无穷。
单位：ms。
 * @method integer getType() 获取垫片内容类型：
1：图片，2：视频。
默认值：1。
 * @method void setType(integer $Type) 设置垫片内容类型：
1：图片，2：视频。
默认值：1。
 */
class CreateLivePadTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
     */
    public $TemplateName;

    /**
     * @var string 垫片内容。
     */
    public $Url;

    /**
     * @var string 描述信息。
长度上限：1024字节。
仅支持中文、英文、数字、_、-。
     */
    public $Description;

    /**
     * @var integer 断流等待时间。
取值范围：0-30000。
单位：ms。
     */
    public $WaitDuration;

    /**
     * @var integer 最大垫片时长。
取值范围：0 - 正无穷。
单位：ms。
     */
    public $MaxDuration;

    /**
     * @var integer 垫片内容类型：
1：图片，2：视频。
默认值：1。
     */
    public $Type;

    /**
     * @param string $TemplateName 模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
     * @param string $Url 垫片内容。
     * @param string $Description 描述信息。
长度上限：1024字节。
仅支持中文、英文、数字、_、-。
     * @param integer $WaitDuration 断流等待时间。
取值范围：0-30000。
单位：ms。
     * @param integer $MaxDuration 最大垫片时长。
取值范围：0 - 正无穷。
单位：ms。
     * @param integer $Type 垫片内容类型：
1：图片，2：视频。
默认值：1。
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WaitDuration",$param) and $param["WaitDuration"] !== null) {
            $this->WaitDuration = $param["WaitDuration"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
