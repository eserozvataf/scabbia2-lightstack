<?php
/**
 * Scabbia2 LightStack Component
 * https://github.com/eserozvataf/scabbia2
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        https://github.com/eserozvataf/scabbia2-lightstack for the canonical source repository
 * @copyright   2010-2016 Eser Ozvataf. (http://eser.ozvataf.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace Scabbia\LightStack;

/**
 * Default methods needed for implementation of a request object
 *
 * @package     Scabbia\LightStack
 * @author      Eser Ozvataf <eser@ozvataf.com>
 * @since       2.0.0
 */
interface RequestInterface
{
    /**
     * Gets endpoint
     *
     * For http, it's scheme://host:port/directory/
     *
     * @return string
     */
    public function getEndpoint();

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod();

    /**
     * Gets path info
     *
     * @return string
     */
    public function getPathInfo();

    /**
     * Gets remote ip
     *
     * @return string
     */
    public function getRemoteIp();

    /**
     * Gets accepted content-types
     *
     * @return array
     */
    public function getAcceptedContentTypes();

    /**
     * Gets accepted charsets
     *
     * @return array
     */
    public function getAcceptedCharsets();

    /**
     * Gets accepted encodings
     *
     * @return array
     */
    public function getAcceptedEncodings();

    /**
     * Gets accepted languages
     *
     * @return array
     */
    public function getAcceptedLanguages();

    /**
     * Determines whether the request is asynchronous or not
     *
     * @return bool
     */
    public function isAsynchronous();

    /**
     * Gets session id
     *
     * @return string
     */
    public function getSessionId();

    /**
     * Gets an item from GET collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function get($uKey, $uDefault = null);

    /**
     * Gets an item from POST collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function post($uKey, $uDefault = null);

    /**
     * Gets an item from FILES collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function file($uKey, $uDefault = null);

    /**
     * Gets an item from GET/POST/FILE collections
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function data($uKey, $uDefault = null);

    /**
     * Gets an item from SERVER collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function server($uKey, $uDefault = null);

    /**
     * Gets an item from SESSION collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function session($uKey, $uDefault = null);

    /**
     * Gets an item from COOKIE collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function cookie($uKey, $uDefault = null);

    /**
     * Gets an item from HEADER collection
     *
     * @param string      $uKey         the key for the value
     * @param mixed       $uDefault     default value if the key does not exist in the collection
     *
     * @return mixed value for the key
     */
    public function header($uKey, $uDefault = null);

    /**
     * Checks if item is in the specified collection
     *
     * @param string|null $uCollection  the key of the collection
     * @param string      $uKey         the key for the value
     *
     * @return bool true if item exists in the collection
     */
    public function has($uCollection, $uKey);

    /**
     * Gets all items from GET/POST/FILE/SERVER/SESSION/COOKIE/HEADER collections
     *
     * @param string|null $uCollection  the key if only one collection's items are needed
     *
     * @return array available collections: get, post, files, server, session, cookies, headers
     */
    public function all($uCollection = null);
}
