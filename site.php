<?php
/**
 * @url
 */

defined('IN_IA') or exit('Access Denied');

class Xfree_lipstickModuleSite extends WeModuleSite {

    public function __construct()
    {
        // 引入公共文件
        require_once 'func.php';
    }

    /**
     * 获取商品列表
     */
    public function doMobileGoods()
    {
        //这个操作被定义用来呈现 功能封面
        global $_GPC, $_W;
    //   $data = '{"status":"1","lists":[{"id":"73","title":"MAC","sub_title":"\u9b45\u53ef\u5b50\u5f39\u5934CHILI","logo":"https:\/\/h5.52mr.xin\/attachment\/images\/1\/2018\/11\/HRTpD0EpRfH0PzP4tRp8R3fz5rr5R5.jpg","price":"2.00","costprice":"199.00"},{"id":"74","title":"MAC","sub_title":"\u9b45\u53ef\u5b50\u5f39\u5934COCKNEY","logo":"https:\/\/h5.52mr.xin\/attachment\/images\/1\/2018\/11\/irm769rT88h6qI5W07xM0yW7OgqZ9M.jpg","price":"2.00","costprice":"199.00"},{"id":"75","title":"MAC","sub_title":"\u9b45\u53ef\u725b\u8840\u8272RUBYWOO","logo":"https:\/\/h5.52mr.xin\/attachment\/images\/1\/2018\/11\/oaDiIe82rKksRqIqq1Skd2XDXE1XjZ.jpg","price":"2.00","costprice":"199.00"}]}';

        $imgurl = MODULE_URL . "static/img/mac.png";
        $data = array(
            'status' => 1,
            'lists' => array(
                array(
                    'id' => 1,
                    'title' => 'CHILI',
                    'sub_title' => "MAC/魅可全色号子弹头口红唇膏",
                    'logo' => $imgurl,
                    'price' => "6.00",
                    'costprice' => "170.00",
                ),
                array(
                    'id' => 2,
                    'title' => 'RUBY WOO',
                    'sub_title' => "MAC/魅可全色号子弹头口红唇膏",
                    'logo' => $imgurl,
                    'price' => "6.00",
                    'costprice' => "170.00",
                ),
                array(
                    'id' => 3,
                    'title' => 'LADY BUG',
                    'sub_title' => "MAC/魅可全色号子弹头口红唇膏",
                    'logo' => $imgurl,
                    'price' => "6.00",
                    'costprice' => "170.00",
                ),
                array(
                    'id' => 4,
                    'title' => 'LADY DANGER',
                    'sub_title' => "MAC/魅可全色号子弹头口红唇膏",
                    'logo' => $imgurl,
                    'price' => "6.00",
                    'costprice' => "170.00",
                ),
                array(
                    'id' => 5,
                    'title' => 'COCKNEY',
                    'sub_title' => "【官方正品】MAC/魅可全色号子弹头口红唇膏",
                    'logo' => $imgurl,
                    'price' => "6.00",
                    'costprice' => "170.00",
                ),
                array(
                    'id' => 6,
                    'title' => 'SEE SHEER',
                    'sub_title' => "【官方正品】MAC/魅可全色号子弹头口红唇膏",
                    'logo' => $imgurl,
                    'price' => "6.00",
                    'costprice' => "170.00",
                ),
            )
        );

        return json_encode($data);
    }

    /**
     * 首页
     */
    public function doMobileIndex() {

        //这个操作被定义用来呈现 引导关注
        global $_GPC, $_W;

        // 没有引导关注链接 到about关注页
        load()->func('tpl');
        include $this->template('index');
    }

    /**
     * 首页
     */
    public function doMobileMyindex() {

        //这个操作被定义用来呈现 引导关注
        global $_GPC, $_W;

        load()->func('tpl');
        include $this->template('myindex');
    }

    /**
     * 示例
     */
    public function doMobileDemo() {

        //这个操作被定义用来呈现 功能封面
        global $_GPC, $_W;

        load()->func('tpl');
        include $this->template('demo');
    }


    /**
     * 真实游戏
     */
	public function doMobileGame() {
		//这个操作被定义用来呈现 功能封面
        global $_GPC, $_W;

        load()->func('tpl');
        include $this->template('play');
    }

    /**
     * 首页设置
     */
    public function doWebIndex(){
        //这个操作被定义用来呈现 管理中心导航菜单
        global $_W, $_GPC;

        $set = $this->get_sysset();

        load()->func('tpl');
        include $this->template('index');
    }



    /**
     * 系统设置
     * @return bool
     */
    private function get_sysset(){
        // 获取系统配置
        global $_W;

        return  pdo_fetch("SELECT * FROM " . tablename(TABLE_SYSSET) . " WHERE uniacid = :uniacid limit 1", array(':uniacid' => $_W['uniacid']));
    }


}