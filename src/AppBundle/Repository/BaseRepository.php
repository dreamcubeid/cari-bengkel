<?php

namespace AppBundle\Repository;

abstract class BaseRepository
{
    protected $disallowColumn = ['limit', 'offset', 'orderBy', 'sortBy'];
}