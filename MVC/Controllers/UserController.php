<?php
require_once "./models/DBconnection.php";
class UserController extends BaseController
{

    private $UserModel;


    public function __construct()
    {
        $this->load('UserModel');
        $this->load('user');
        $this->UserModel = new UserModel(DBconnection::make());
    }

    public function home()
    {

        $user = new User(null, $_POST['email'], md5($_POST['password']));
        $result = $this->UserModel->login($user);
        if (count($result)) {
            // session_start();
            $_SESSION['user'] = $result[0];
            if($result[0]['isadmin'] == 1 ){

                return header('location: admin.php');
            }else{

                return header('location: ./index.php?controller=Product&action=index');

            }          
            
        
        } else {
            $_SESSION['success'] = '*Tài khoản hoặc mật khẩu không đúng';
            $this->view('logins.index');
        }
    }

    public function logout()
    {
        // session_start();
        // unset($_SESSION['user']);
        session_destroy();
        return header('location: ./index.php?controller=Product&action=index');
    }

    public function create(){
        $user = new User($_POST['name'], $_POST['email'], md5($_POST['password']));
        $this->UserModel->add($user);
        $_SESSION['success'] = "Đăng ký thành công|đăng nhập để mua hàng!";
        return $this->view('logins.index');
    }

    public function index()    {

        return $this->view('logins.index');
    }
    public function singup()    {

        return $this->view('logins.signup');
    }
}
