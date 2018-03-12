<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosEnterpriseWiFiConfiguration File
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
* IosEnterpriseWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosEnterpriseWiFiConfiguration extends IosWiFiConfiguration
{
    /**
    * Gets the eapType
    *
    * @return EapType The eapType
    */
    public function getEapType()
    {
        if (array_key_exists("eapType", $this->_propDict)) {
            if (is_a($this->_propDict["eapType"], "Microsoft\Graph\Model\EapType")) {
                return $this->_propDict["eapType"];
            } else {
                $this->_propDict["eapType"] = new EapType($this->_propDict["eapType"]);
                return $this->_propDict["eapType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapType
    *
    * @param EapType $val The eapType
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setEapType($val)
    {
        $this->_propDict["eapType"] = $val;
        return $this;
    }
    
    /**
    * Gets the eapFastConfiguration
    *
    * @return EapFastConfiguration The eapFastConfiguration
    */
    public function getEapFastConfiguration()
    {
        if (array_key_exists("eapFastConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["eapFastConfiguration"], "Microsoft\Graph\Model\EapFastConfiguration")) {
                return $this->_propDict["eapFastConfiguration"];
            } else {
                $this->_propDict["eapFastConfiguration"] = new EapFastConfiguration($this->_propDict["eapFastConfiguration"]);
                return $this->_propDict["eapFastConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapFastConfiguration
    *
    * @param EapFastConfiguration $val The eapFastConfiguration
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setEapFastConfiguration($val)
    {
        $this->_propDict["eapFastConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the trustedServerCertificateNames
    *
    * @return string The trustedServerCertificateNames
    */
    public function getTrustedServerCertificateNames()
    {
        if (array_key_exists("trustedServerCertificateNames", $this->_propDict)) {
            return $this->_propDict["trustedServerCertificateNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trustedServerCertificateNames
    *
    * @param string $val The trustedServerCertificateNames
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setTrustedServerCertificateNames($val)
    {
        $this->_propDict["trustedServerCertificateNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    *
    * @return WiFiAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Microsoft\Graph\Model\WiFiAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new WiFiAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    *
    * @param WiFiAuthenticationMethod $val The authenticationMethod
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the innerAuthenticationProtocolForEapTtls
    *
    * @return NonEapAuthenticationMethodForEapTtlsType The innerAuthenticationProtocolForEapTtls
    */
    public function getInnerAuthenticationProtocolForEapTtls()
    {
        if (array_key_exists("innerAuthenticationProtocolForEapTtls", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForEapTtls"], "Microsoft\Graph\Model\NonEapAuthenticationMethodForEapTtlsType")) {
                return $this->_propDict["innerAuthenticationProtocolForEapTtls"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForEapTtls"] = new NonEapAuthenticationMethodForEapTtlsType($this->_propDict["innerAuthenticationProtocolForEapTtls"]);
                return $this->_propDict["innerAuthenticationProtocolForEapTtls"];
            }
        }
        return null;
    }
    
    /**
    * Sets the innerAuthenticationProtocolForEapTtls
    *
    * @param NonEapAuthenticationMethodForEapTtlsType $val The innerAuthenticationProtocolForEapTtls
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setInnerAuthenticationProtocolForEapTtls($val)
    {
        $this->_propDict["innerAuthenticationProtocolForEapTtls"] = $val;
        return $this;
    }
    
    /**
    * Gets the outerIdentityPrivacyTemporaryValue
    *
    * @return string The outerIdentityPrivacyTemporaryValue
    */
    public function getOuterIdentityPrivacyTemporaryValue()
    {
        if (array_key_exists("outerIdentityPrivacyTemporaryValue", $this->_propDict)) {
            return $this->_propDict["outerIdentityPrivacyTemporaryValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outerIdentityPrivacyTemporaryValue
    *
    * @param string $val The outerIdentityPrivacyTemporaryValue
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setOuterIdentityPrivacyTemporaryValue($val)
    {
        $this->_propDict["outerIdentityPrivacyTemporaryValue"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rootCertificatesForServerValidation
     *
     * @return array The rootCertificatesForServerValidation
     */
    public function getRootCertificatesForServerValidation()
    {
        if (array_key_exists("rootCertificatesForServerValidation", $this->_propDict)) {
           return $this->_propDict["rootCertificatesForServerValidation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rootCertificatesForServerValidation
    *
    * @param IosTrustedRootCertificate $val The rootCertificatesForServerValidation
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setRootCertificatesForServerValidation($val)
    {
		$this->_propDict["rootCertificatesForServerValidation"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificateForClientAuthentication
    *
    * @return IosCertificateProfileBase The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "Microsoft\Graph\Model\IosCertificateProfileBase")) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new IosCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificateForClientAuthentication
    *
    * @param IosCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return IosEnterpriseWiFiConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }
    
}