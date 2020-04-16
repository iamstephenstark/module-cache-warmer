<?php

namespace IAmStephenStark\CacheWarmer\Api;

use IAmStephenStark\CacheWarmer\Model\Url;

interface UrlRepositoryInterface
{
    /**
     * @param int $id
     * @return \IAmStephenStark\CacheWarmer\Model\Url
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \IAmStephenStark\CacheWarmer\Model\Url $url
     * @return \IAmStephenStark\CacheWarmer\Model\Url
     */
    public function save(Url $url);

    /**
     * @param \IAmStephenStark\CacheWarmer\Model\Url $url
     * @return void
     */
    public function delete(Url $url);
}