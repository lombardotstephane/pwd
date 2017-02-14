<?php

namespace CCH\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CCHUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
