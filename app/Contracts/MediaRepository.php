<?php
namespace App\Contracts;
use App\Contracts\AbstractRepository;

interface MediaRepository extends AbstractRepository
{
    public function getMediaByTypeCinema($with = [], $select = ['*']);
    public function getMediaByTypeMovie($with = [], $select = ['*']);
    public function getMediaByTypePost($with = [], $select = ['*']);
    public function getMediaByTypePromotion($with = [], $select = ['*']);
}
