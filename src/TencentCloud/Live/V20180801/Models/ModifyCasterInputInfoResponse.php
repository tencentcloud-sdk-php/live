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
 * ModifyCasterInputInfo返回参数结构体
 *
 * @method string getInputPlayUrl() 获取修改输入源后的预览地址。
注：该地址仅作为预览使用，不可分发。
 * @method void setInputPlayUrl(string $InputPlayUrl) 设置修改输入源后的预览地址。
注：该地址仅作为预览使用，不可分发。
 * @method string getInputWebRTCPlayUrl() 获取修改后的输入源webrtc预览地址。
该地址需配合腾讯云快直播播放SDK使用。
注：该地址仅做预览使用，不可分发。
 * @method void setInputWebRTCPlayUrl(string $InputWebRTCPlayUrl) 设置修改后的输入源webrtc预览地址。
该地址需配合腾讯云快直播播放SDK使用。
注：该地址仅做预览使用，不可分发。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyCasterInputInfoResponse extends AbstractModel
{
    /**
     * @var string 修改输入源后的预览地址。
注：该地址仅作为预览使用，不可分发。
     */
    public $InputPlayUrl;

    /**
     * @var string 修改后的输入源webrtc预览地址。
该地址需配合腾讯云快直播播放SDK使用。
注：该地址仅做预览使用，不可分发。
     */
    public $InputWebRTCPlayUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InputPlayUrl 修改输入源后的预览地址。
注：该地址仅作为预览使用，不可分发。
     * @param string $InputWebRTCPlayUrl 修改后的输入源webrtc预览地址。
该地址需配合腾讯云快直播播放SDK使用。
注：该地址仅做预览使用，不可分发。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InputPlayUrl",$param) and $param["InputPlayUrl"] !== null) {
            $this->InputPlayUrl = $param["InputPlayUrl"];
        }

        if (array_key_exists("InputWebRTCPlayUrl",$param) and $param["InputWebRTCPlayUrl"] !== null) {
            $this->InputWebRTCPlayUrl = $param["InputWebRTCPlayUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
