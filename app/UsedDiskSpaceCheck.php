<?php

namespace App;

class UsedDiskSpaceCheck extends \Spatie\Health\Checks\Checks\UsedDiskSpaceCheck
{
    protected int $warningThreshold = 10;
}
