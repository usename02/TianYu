<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 14:23
 */

namespace app\index\controller;
use think\paginator\driver\Bootstrap6;
use think\Request;
use app\index\model\Member as MemberModel;
use think\Db;
use think\session;

class Member extends Base
{
//    会员列表
    public function  memberList()
    {
        //获取所有商铺表member数据
        $result = MemberModel::all(
            function ($query){
                $query->where('ID')->find();
            }
        );
//        获取分页的数据
$list = MemberModel::paginate($listRows = 3, $simple = false,['type'=>'Bootstrap6']);
//var_dump($result);
            //分页显示输出
        $page=$list->render();
//var_dump($page);/*取不到样式*/
        $count = Db::name('member')->count();
//        遍历member表
        foreach ($result as $value){
            $data = [
                    'ID' => $value->ID,  //主键
                    'CODE'=>$value->CODE,//微信贼会员编号
                    'VIPNAME'=>$value->VIPNAME,//姓名
                    'MOBIL'=>$value->MOBIL,//电话
                    'INTEGRAL'=>$value->INTEGRAL,//积分
                    'LJJNTEGRAL'=>$value->LJJNTEGRAL,//累计积分
                    'OPENID_XCX'=>$value->OPENID_XCX,//小程序OPENID
                    'OPENID_FFH'=>$value->OPENID_FFH,//服务号OPENID
                    'UNIONID'=>$value->UNIONID,//开放平台UNIONID
                    'CARDNO'=>$value->CARDNO,//会员卡号
                    'PASS_WORD'=>$value->PASS_WORD,//卡密码
                    'C_VIPTYPE'=>$value->C_VIPTYPE,//卡类型
                    'C_STORE_ID'=>$value->C_STORE_ID,//开卡店仓
                    'VIPSTATE'=>$value->VIPSTATE,//有效
                    'MSGVAR'=>$value->MSGVAR,//消息版本号

            ];
            //,保存到数组   $MenberList中
            $MemberList[] = $data;
        }
        $this -> view -> assign('page', $page);
        $this -> view -> assign('member', $MemberList);
        $this -> view -> assign('count', $count);
        //设置当前页面的seo模板变量
        $this->view->assign('title','编辑会员');
        $this->view->assign('keywords','php.cn');
        $this->view->assign('desc','田雨微信管理客户端');
        //测试数据
//        var_dump($shopList);
//        var_dump($count);
//        dump($result);
        return $this -> view -> fetch('member/member-list');
    }
     public function memberList1()
    {

//        HANDSET=&ROLE=&NAME=array(4) { ["login_name"]=> string(0) "" ["login_user"]=> string(0) "" ["login_role"]=> string(0) "" ["papernum"]=> string(1) "3" }

        //传值 登录人员 handset role

        header("Content-type: text/html; charset=UTF8");
        $url = "https://wx.3space.me/ty/admin_vipviewall.php";

//传值 登录人员 handset role
        $post = 'HANDSET=' . '&ROLE=' . '&NAME=' . '1';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $data = curl_exec($ch);
        curl_close($ch);
        $vip = json_decode($data, true);
        $vipdata = $vip['vipdata'];
        $allRowCount = (int)$vip['allRowCount'];
        var_dump($vip);
        var_dump($vipdata);
        var_dump($vip['allRowCount']);
        var_dump($allRowCount);

    }
    //渲染商铺编辑界面
    public function memberEdit(Request $request)
    {
//去处要编辑的数据的id
        $member_id = $request -> param('');
//数组中取id
        $id = $member_id['ID'];

//        var_dump($member_id);
        $result =  Db::table('member')->where('ID',$id)->find();
        //tp5中通过模型select返回的是对象 通过db select返回的是数组
        //设置当前页面的seo模板变量
        $this->view->assign('title','编辑会员信息');
        $this->view->assign('member_info',$result);//获取对象原始数据
        //渲染当前的编辑模板
        return $this->view->fetch('member/member-edit');
    }
    //商铺状态变更
    public function setStatus(Request $request)
    {
        $member_id = $request -> param('ID');
        $id = $member_id['ID'];
//        $result = ShopModel::get($shop_id);
        $result = Db::table('member')->where('ID',$id)->find();
        if($result->getData('STATUS') == 1) {
            MemberModel::update(['STATUS'=>0],['ID'=>$member_id]);
        } else {
            MemberModel::update(['STATUS'=>1],['ID'=>$member_id]);
        }
    }
    //会员更新
    public function doEdit(Request $request)
    {
        //$data存储ajax的发送的数据
        $data = $request-> param();
        //去掉表单中为空的数据,即没有修改的内容
        foreach ($data as $key => $value ){
            if (!empty($value)){
                $data[$key] = $value;
            }
        }

        //设置更新条件
        $condition = ['CODE'=>$data['CODE']];
        //更新当前记录
        $result = MemberModel::update($data,$condition);

        //设置返回数据
        $status = 0;
        $message = '更新失败,请检查';
        //检测更新结果,将结果返回给shop_edit模板中的ajax提交回调处理
        if (true == $result) {
            $status = 1;
            $message = '恭喜, 更新成功!!!';
        }
        return ['status'=>$status, 'message'=>$message];

    }
//    修改密码 界面渲染
    public  function MemberPw(Request $request)
    {
        $member_id = $request-> param('ID');
        $result = MemberModel::get($member_id);
        $this->view->assign('title','添加会员');
        $this->view->assign('keywords','php.cn');
        $this->view->assign('desc','田雨后台');
        $this->view->assign('member_info',$result);
        return $this->view->fetch('member/member-pw');
    }
//    修改密码
    public function doPw(Request $request)
    {
        //$data存储ajax的发送的数据
        $member_id = $request-> param('ID');
        $result = MemberModel::get($member_id);
        //去掉表单中为空的数据,即没有修改的内容
        foreach ($data as $key => $value ){
            if (!empty($value)){
                $data[$key] = $value;
            }
        }
        //设置更新条件
        $condition = ['name'=>$data['NAME']];

        //更新当前记录
        $result = MemberModel::update($data,$condition);
        //设置返回数据
        $status = 0;
        $message = '更新失败,请检查';
        //检测更新结果,将结果返回给shop_edit模板中的ajax提交回调处理
        if (true == $result) {
            $status = 1;
            $message = '恭喜, 更新成功!!!';
        }
        return ['status'=>$status, 'message'=>$message];

    }
    //渲染 会员添加界面
    public function MemberAdd()
    {
        $this->view->assign('title','添加会员');
        $this->view->assign('keywords','php.cn');
        $this->view->assign('desc','田雨后台');
        return $this->view->fetch('member_add');
    }
//    添加商铺
    public function   addMember(Request $request)
    {
        $data = $request -> param();
        $status = 1;
        $message = '添加成功';
//验证规则（数组）
        $rule = [

        ];
        //验证数据
        $result = $this -> validate($data, $rule);
//验证判断
        $user=1;
        if ($result === true) {
            $user= MemberModel::create($request->param());
            if ($user === null) {
                $status = 0;
                $message = '添加失败了呢···';
            }
        }
        return ['status'=>$status, 'message'=>$message];
    }

    //添加会员
    public  function doAdd(Request $request)
    {
        //从提交表单中获取数据
        $data = $request -> param();

        //向表中新增记录
        $result = ShopModel::create($data);

        //设置返回数据
        $status = 0;
        $message = '添加失败,请检查';

        //检测更新结果,将结果返回给shop_add模板中的ajax提交回调处理
        if (true == $result) {
            $status = 1;
            $message = '恭喜, 添加成功~~';
        }
        return ['status'=>$status, 'message'=>$message];
    }
    //渲染已删除会员界面
    public  function doDel(){
        $this->view->assign('title','删除会员');
        $this->view->assign('keywords','php.cn');
        $this->view->assign('desc','田雨后台');
//$result = ShopModel::get('is_detele'==1);//取到的是空值 null
//        $result =  Db::table('shop')->where('is_Delete','=','1');
        $result = MemberModel::all(
            function ($query){
                $query->where('ID')->find();
            }
        );

        foreach ($result as $value){
            $data = [
                'ID' => $value->ID,  //主键
                'NAME' => $value->NAME,  //店仓名
                'delete_time'=> $value->delete_time,//删除时间
                'is_delete' => $value->is_delete,   //判断删除状态
            ];
            //,保存到数组   $shopList中
            $MemberList[] = $data;
        }

        //将所有数据赋值给当前模板
        $this->view->assign('shop', $MemberList);
        return $this->view->fetch('Member_del');
    }
    //软删除操作
    public function deleteMember(Request $request)
    {
        $Member_id = $request -> param('id');
        ShopModel::update(['is_delete'=>1],['id'=> $Member_id]);
        ShopModel::destroy($Member_id);

    }
    //恢复删除操作
    public  function unDel()
    {
        ShopModel::update(['delete_time'=>NULL],['is_delete'=>0]);
    }
    //恢复删除操作
    public function unDelete()
    {
        ShopModel::update(['delete_time'=>NULL],['is_delete'=>0]);
    }
}
