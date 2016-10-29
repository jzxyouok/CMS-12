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
		echo 'Welcome!';
		session_start();
		
	}
	
	public function register(){
		$this->display();
	}
	
	public function doRegister($code = '', $id = ''){
		$Verify = new \Think\Verify();
		
		if(!$Verify->check($_POST['captcha'])){
			exit('Wrong captcha!');
		}
		$register['username'] = $_POST['username'];
		$register['password1'] = $_POST['password1'];
		$register['password2'] = $_POST['password2'];
		$register['email'] = $_POST['email'];
		if(empty($register['username']) || empty($register['password1']) || $register['password1'] != $register['password1']){
			exit('incorrect user info');
		}
		$User = M('user');
		$result = $User->add($register);
		if(!result){
			exit('Register failed!please go back and try again');
		}
	}
	
	
}