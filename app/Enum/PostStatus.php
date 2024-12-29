<?php

namespace App\Enum;

enum PostStatus:int{
        case Unpublished = 0;
        case Published = 1;
        case Scheduled = 2;
}
