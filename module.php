<?php
/**
 * yingtao_lipstick模块定义
 *
 * @author Todd3015
 * @url
 */
defined('IN_IA') or exit('Access Denied');

class Yingtao_lipstickModule extends WeModule {


    public function welcomeDisplay($menus = array()) {
        //这里来展示DIY管理界面
        include $this->template('welcome');
    }
}