<?php

/*
 * The MIT License
 *
 * Copyright 2015 Aazeev <github.44.00@10g.pl>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Dota2Stats;

final class CurlRequest
{

    /**
     *
     * @var resource
     */
    private $curl;

    /**
     *
     * @var string
     */
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
        $this->curl = \curl_init($this->getUrl());
        curl_setopt_array($this->getCurl(), [
            CURLOPT_RETURNTRANSFER => 1,
        ]);
    }

    /**
     *
     * @return resource
     */
    private function getCurl()
    {
        return $this->curl;
    }

    /**
     *
     * @return string
     */
    private function getUrl()
    {
        return $this->url;
    }

    public function exec()
    {
        return \curl_exec($this->getCurl());
    }

}
