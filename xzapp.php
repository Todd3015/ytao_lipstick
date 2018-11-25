<?php
/**
 * ytao_lipstick熊掌号接口定义
 *
 * @author Todd3015
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Ytao_lipstickModuleXzapp extends WeModuleXzapp {
	public function doPageTest(){
		global $_GPC, $_W;
		// 此处开发者自行处理
		include $this->template('test');
	}

}