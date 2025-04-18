<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnterStandby请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组 ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组 ID。
 * @method array getInstanceIds() 获取运行中状态实例列表，不支持传入非运行中状态实例。
 * @method void setInstanceIds(array $InstanceIds) 设置运行中状态实例列表，不支持传入非运行中状态实例。
 */
class EnterStandbyRequest extends AbstractModel
{
    /**
     * @var string 伸缩组 ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var array 运行中状态实例列表，不支持传入非运行中状态实例。
     */
    public $InstanceIds;

    /**
     * @param string $AutoScalingGroupId 伸缩组 ID。
     * @param array $InstanceIds 运行中状态实例列表，不支持传入非运行中状态实例。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
