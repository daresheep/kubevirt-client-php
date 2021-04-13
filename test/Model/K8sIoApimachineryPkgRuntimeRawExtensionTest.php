<?php
/**
 * K8sIoApimachineryPkgRuntimeRawExtensionTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * KubeVirt API
 *
 * This is KubeVirt API an add-on for Kubernetes.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: kubevirt-dev@googlegroups.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * K8sIoApimachineryPkgRuntimeRawExtensionTest Class Doc Comment
 *
 * @category    Class
 * @description RawExtension is used to hold extensions in external versions.  To use this, make a field which has RawExtension as its type in your external, versioned struct, and Object in your internal struct. You also need to register your various plugin types.  // Internal package: type MyAPIObject struct {  runtime.TypeMeta &#x60;json:\&quot;,inline\&quot;&#x60;  MyPlugin runtime.Object &#x60;json:\&quot;myPlugin\&quot;&#x60; } type PluginA struct {  AOption string &#x60;json:\&quot;aOption\&quot;&#x60; }  // External package: type MyAPIObject struct {  runtime.TypeMeta &#x60;json:\&quot;,inline\&quot;&#x60;  MyPlugin runtime.RawExtension &#x60;json:\&quot;myPlugin\&quot;&#x60; } type PluginA struct {  AOption string &#x60;json:\&quot;aOption\&quot;&#x60; }  // On the wire, the JSON will look something like this: {  \&quot;kind\&quot;:\&quot;MyAPIObject\&quot;,  \&quot;apiVersion\&quot;:\&quot;v1\&quot;,  \&quot;myPlugin\&quot;: {   \&quot;kind\&quot;:\&quot;PluginA\&quot;,   \&quot;aOption\&quot;:\&quot;foo\&quot;,  }, }  So what happens? Decode first uses json or yaml to unmarshal the serialized data into your external MyAPIObject. That causes the raw JSON to be stored, but not unpacked. The next step is to copy (using pkg/conversion) into the internal struct. The runtime package&#39;s DefaultScheme has conversion functions installed which will unpack the JSON stored in RawExtension, turning it into the correct object type, and storing it in the Object. (TODO: In the case where the object is of an unknown type, a runtime.Unknown object will be created and stored.)
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class K8sIoApimachineryPkgRuntimeRawExtensionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "K8sIoApimachineryPkgRuntimeRawExtension"
     */
    public function testK8sIoApimachineryPkgRuntimeRawExtension()
    {
    }
}
