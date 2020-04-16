<?php

namespace IAmStephenStark\CacheWarmer\Model;

use IAmStephenStark\CacheWarmer\Api\UrlRepositoryInterface;
use IAmStephenStark\CacheWarmer\Model\UrlFactory;
use IAmStephenStark\CacheWarmer\Model\Url;

class UrlRepository implements UrlRepositoryInterface
{
    private $urlFactory;

    public function __construct(
        UrlFactory $urlFactory
    ) {
        $this->urlFactory = $urlFactory;
    }

    public function getById($id)
    {
        $url = $this->urlFactory->create();
        $url>getResource()->load($url, $id);
        if (! $url>getId()) {
            throw new NoSuchEntityException(__('Unable to find url with ID "%1"', $id));
        }
        return $url;
    }

    public function save(Url $url)
    {
        $url>getResource()->save($url);
        return $url;
    }

    public function delete(Url $url)
    {
        $url>getResource()->delete($url);
    }
}