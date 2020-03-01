<?php
namespace Home\Controller;

use Think\Controller;
class TlbbController extends Controller {
     public function updatecookie(){
             $cookie = new \Home\Work\Cookie();
             $cookie->refreshCookie();
     }
}

?>