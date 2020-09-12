<?php

/**
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Auth\HttpHandler;

use Google\Site_Kit_Dependencies\GuzzleHttp\ClientInterface;
use Google\Site_Kit_Dependencies\Psr\Http\Message\RequestInterface;
use Google\Site_Kit_Dependencies\Psr\Http\Message\ResponseInterface;
class Guzzle6HttpHandler
{
    /**
     * @var ClientInterface
     */
    private $client;
    /**
     * @param ClientInterface $client
     */
    public function __construct(\Google\Site_Kit_Dependencies\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * Accepts a PSR-7 request and an array of options and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     * @param array $options
     * @return ResponseInterface
     */
    public function __invoke(\Google\Site_Kit_Dependencies\Psr\Http\Message\RequestInterface $request, array $options = [])
    {
        return $this->client->send($request, $options);
    }
    /**
     * Accepts a PSR-7 request and an array of options and returns a PromiseInterface
     *
     * @param RequestInterface $request
     * @param array $options
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function async(\Google\Site_Kit_Dependencies\Psr\Http\Message\RequestInterface $request, array $options = [])
    {
        return $this->client->sendAsync($request, $options);
    }
}