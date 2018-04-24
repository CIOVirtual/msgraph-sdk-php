<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVpnConnectionType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* AppleVpnConnectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AppleVpnConnectionType extends Enum
{
    /**
    * The Enum AppleVpnConnectionType
    */
    const CISCO_ANY_CONNECT = "ciscoAnyConnect";
    const PULSE_SECURE = "pulseSecure";
    const F5_EDGE_CLIENT = "f5EdgeClient";
    const DELL_SONIC_WALL_MOBILE_CONNECT = "dellSonicWallMobileConnect";
    const CHECK_POINT_CAPSULE_VPN = "checkPointCapsuleVpn";
    const CUSTOM_VPN = "customVpn";
    const CISCO_IP_SEC = "ciscoIPSec";
    const CITRIX = "citrix";
    const CISCO_ANY_CONNECT_V2 = "ciscoAnyConnectV2";
}