<?php

namespace Myweb\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MywebAdminBundle extends Bundle{
    public function getParent (){
        return 'FOSUserBundle';
    }
}
?>
