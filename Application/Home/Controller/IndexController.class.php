<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
	
	public function showCaptcha(){
		$config = array(	//验证码配置
			'length'	=> 4,//验证码长度
			'fontSize'  => 15,//字体大小
			'useNoise'  => true,//启用躁点
			'expire'	=> 30,	//验证码有效时间（秒）
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
	public function verifyLoginInput($code = '',$id = ''){	//检测登陆信息
		$Verify = new \Think\Verify();
		$checkCapt = $Verify->check($_POST['captcha']);				//先检测验证码
		if(!$checkCapt){
			exit('Wrong captcha,please go back and try again!');
		}
		$User = M('user');											//再检测用户名密码
		$login['username'] = $_POST['username'];	//数组条件查询
		$login['password'] = $_POST['password'];
		if(!$User->where($login)->select()){
			exit('Incorrect username or password!');
		}
		
		
	}
}