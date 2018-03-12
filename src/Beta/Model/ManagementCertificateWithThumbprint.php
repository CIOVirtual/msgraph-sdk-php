<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementCertificateWithThumbprint File
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
/**
* ManagementCertificateWithThumbprint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagementCertificateWithThumbprint extends Entity
{
    /**
    * Gets the thumbprint
    *
    * @return string The thumbprint
    */
    public function getThumbprint()
    {
        if (array_key_exists("thumbprint", $this->_propDict)) {
            return $this->_propDict["thumbprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thumbprint
    *
    * @param string $val The value of the thumbprint
    *
    * @return ManagementCertificateWithThumbprint
    */
    public function setThumbprint($val)
    {
        $this->_propDict["thumbprint"] = $val;
        return $this;
    }
    /**
    * Gets the certificate
    *
    * @return string The certificate
    */
    public function getCertificate()
    {
        if (array_key_exists("certificate", $this->_propDict)) {
            return $this->_propDict["certificate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificate
    *
    * @param string $val The value of the certificate
    *
    * @return ManagementCertificateWithThumbprint
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
        return $this;
    }
}
