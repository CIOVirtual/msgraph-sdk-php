<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSScepCertificateProfile File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* MacOSScepCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSScepCertificateProfile extends MacOSCertificateProfileBase
{
    /**
    * Gets the scepServerUrls
    *
    * @return string The scepServerUrls
    */
    public function getScepServerUrls()
    {
        if (array_key_exists("scepServerUrls", $this->_propDict)) {
            return $this->_propDict["scepServerUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scepServerUrls
    *
    * @param string $val The scepServerUrls
    *
    * @return MacOSScepCertificateProfile
    */
    public function setScepServerUrls($val)
    {
        $this->_propDict["scepServerUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectNameFormatString
    *
    * @return string The subjectNameFormatString
    */
    public function getSubjectNameFormatString()
    {
        if (array_key_exists("subjectNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectNameFormatString
    *
    * @param string $val The subjectNameFormatString
    *
    * @return MacOSScepCertificateProfile
    */
    public function setSubjectNameFormatString($val)
    {
        $this->_propDict["subjectNameFormatString"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyUsage
    *
    * @return KeyUsages The keyUsage
    */
    public function getKeyUsage()
    {
        if (array_key_exists("keyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["keyUsage"], "Microsoft\Graph\Beta\Model\KeyUsages")) {
                return $this->_propDict["keyUsage"];
            } else {
                $this->_propDict["keyUsage"] = new KeyUsages($this->_propDict["keyUsage"]);
                return $this->_propDict["keyUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyUsage
    *
    * @param KeyUsages $val The keyUsage
    *
    * @return MacOSScepCertificateProfile
    */
    public function setKeyUsage($val)
    {
        $this->_propDict["keyUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the keySize
    *
    * @return KeySize The keySize
    */
    public function getKeySize()
    {
        if (array_key_exists("keySize", $this->_propDict)) {
            if (is_a($this->_propDict["keySize"], "Microsoft\Graph\Beta\Model\KeySize")) {
                return $this->_propDict["keySize"];
            } else {
                $this->_propDict["keySize"] = new KeySize($this->_propDict["keySize"]);
                return $this->_propDict["keySize"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keySize
    *
    * @param KeySize $val The keySize
    *
    * @return MacOSScepCertificateProfile
    */
    public function setKeySize($val)
    {
        $this->_propDict["keySize"] = $val;
        return $this;
    }
    
    /**
    * Gets the hashAlgorithm
    *
    * @return HashAlgorithms The hashAlgorithm
    */
    public function getHashAlgorithm()
    {
        if (array_key_exists("hashAlgorithm", $this->_propDict)) {
            if (is_a($this->_propDict["hashAlgorithm"], "Microsoft\Graph\Beta\Model\HashAlgorithms")) {
                return $this->_propDict["hashAlgorithm"];
            } else {
                $this->_propDict["hashAlgorithm"] = new HashAlgorithms($this->_propDict["hashAlgorithm"]);
                return $this->_propDict["hashAlgorithm"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hashAlgorithm
    *
    * @param HashAlgorithms $val The hashAlgorithm
    *
    * @return MacOSScepCertificateProfile
    */
    public function setHashAlgorithm($val)
    {
        $this->_propDict["hashAlgorithm"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extendedKeyUsages
     *
     * @return array The extendedKeyUsages
     */
    public function getExtendedKeyUsages()
    {
        if (array_key_exists("extendedKeyUsages", $this->_propDict)) {
           return $this->_propDict["extendedKeyUsages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extendedKeyUsages
    *
    * @param ExtendedKeyUsage $val The extendedKeyUsages
    *
    * @return MacOSScepCertificateProfile
    */
    public function setExtendedKeyUsages($val)
    {
		$this->_propDict["extendedKeyUsages"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectAlternativeNameFormatString
    *
    * @return string The subjectAlternativeNameFormatString
    */
    public function getSubjectAlternativeNameFormatString()
    {
        if (array_key_exists("subjectAlternativeNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectAlternativeNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectAlternativeNameFormatString
    *
    * @param string $val The subjectAlternativeNameFormatString
    *
    * @return MacOSScepCertificateProfile
    */
    public function setSubjectAlternativeNameFormatString($val)
    {
        $this->_propDict["subjectAlternativeNameFormatString"] = $val;
        return $this;
    }
    
    /**
    * Gets the rootCertificate
    *
    * @return MacOSTrustedRootCertificate The rootCertificate
    */
    public function getRootCertificate()
    {
        if (array_key_exists("rootCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["rootCertificate"], "Microsoft\Graph\Beta\Model\MacOSTrustedRootCertificate")) {
                return $this->_propDict["rootCertificate"];
            } else {
                $this->_propDict["rootCertificate"] = new MacOSTrustedRootCertificate($this->_propDict["rootCertificate"]);
                return $this->_propDict["rootCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rootCertificate
    *
    * @param MacOSTrustedRootCertificate $val The rootCertificate
    *
    * @return MacOSScepCertificateProfile
    */
    public function setRootCertificate($val)
    {
        $this->_propDict["rootCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCertificateStates
     *
     * @return array The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists("managedDeviceCertificateStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceCertificateStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceCertificateStates
    *
    * @param ManagedDeviceCertificateState $val The managedDeviceCertificateStates
    *
    * @return MacOSScepCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
		$this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}