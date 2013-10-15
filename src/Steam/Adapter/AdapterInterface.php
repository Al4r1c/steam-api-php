<?php

namespace Steam\Adapter;

interface AdapterInterface
{
    /**
     * @param string $url
     *
     * @return AdapterInterface
     */
    public function setBaseSteamApiUrl($url);

    /**
     * @return string
     */
    public function getBaseSteamApiUrl();

    /**
     * @param string $url
     * @param array $params
     * @param string $steamKey
     *
     * @return AdapterInterface
     */
    public function request($url, array $params = array(), $steamKey = null);

    /**
     * @return string
     */
    public function getRawBody();

    /**
     * @return mixed
     */
    public function getParsedBody();
}