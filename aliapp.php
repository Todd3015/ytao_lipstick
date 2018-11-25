<?php
/**
 * yingtao_lipstick支付宝小程序接口定义
 *
 * @author Todd3015
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Yingtao_lipstickModuleAliapp extends WeModuleAliapp {
	public function doPageTest(){
		global $_GPC, $_W;
		// 此处开发者自行处理
		include $this->template('test');
	}
}