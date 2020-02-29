<?php
    namespace Home\Controller;
    use Think\Controller;

    class tlbbController extends Controller {

    public function getImg($cookie,$goodsNum){

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://tl.cyg.changyou.com/transaction/captcha-image?goods_serial_num=$goodsNum&t=1582944138077",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "Cookie:    $cookie"
    ),
    ));
    $result = curl_exec($curl);

    $base64_image_final = base64_encode($result);

    curl_close($curl);

    return $base64_image_final;

    $this->tlbbChang($cookie,$goodsNum,$base64_image_final);
    }

    function doImg(){

    }
    public function getUserInfo(){
    $cookie="";
    }

    public function tlbbChang($cookie,$goodsNum,$img){ 

        try{

    //超级鹰账号信息
    $user		= 'w258765';				//超级鹰用户账号
    $pass		= md5('w258765');			//经过md5加密的密码
    $softid		= '217309ae4cb4d37f8c85e26b6fad0159';			//软件ID 用户中心>软件ID 可以生成
    $codetype	= '1004' ;			//码图类型,查看更多类型 https://www.chaojiying.com/price.html
    // $userfile	= 'img.jpg' ;		//注意PHP是否能正确取得图片数据，关注下PHP权限和图片路径  注意有时windows系统须要用到绝对路径
    $base64_str	= $img ;				//base64字符串方式 参考 https://www.chaojiying.com/api-46.html

    //发送 base64字符串方式
    $result = $this->CJY_Post_base64($user,$pass,$softid,$codetype,$base64_str) ;

    //判断是否能读取到文件
    // if (is_readable($userfile) == false) { die('文件不存在或者无法读取'); }

    //查询帐号信息
    echo '----帐号信息----<br />';
    $info = $this->CJY_GetScore($user,$pass);
    $infoArray = json_decode($info,true);

    //识别验证码
    // $result = $this->CJY_RecognizeBytes($user,$pass,$softid,$codetype,$userfile);
    $reArray = json_decode($result,true);
    if($reArray["err_no"] == 0)
    {
        return [
            'msg'=>$reArray["pic_str"],
            'id'=>$reArray["pic_id"]
        ];
    }
    else{
        return [
            'msg'=>json_encode($reArray)
        ];
    }


    //报告错误,只有识别成功并且验证码错误时,调用此函数才有效
    if($reArray["err_no"] != 0)
    {
    $this->CJY_ReportError($user,$pass,$reArray["pic_id"],$softid);
    }

    }catch(\Exception $e){

    return $e;

    };
    }

    //查询题分
    //返回样例:{"err_no":0,"err_str":"OK","tifen":821690,"tifen_lock":0}
    function CJY_GetScore($user,$pass){
    $url = 'http://code.chaojiying.net/Upload/GetScore.php' ; 
    $fields = array( 
    'user'=>$user ,
    'pass2'=>$pass ,
    ); 

    $ch = curl_init() ;  
    curl_setopt($ch, CURLOPT_URL,$url) ;  
    curl_setopt($ch, CURLOPT_POST,count($fields)) ;   
    curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回  
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回  
    curl_setopt($ch, CURLOPT_REFERER,'') ; 
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3') ;
    $result = curl_exec($ch); 
    curl_close($ch) ;

    return $result ;
    }

    //识别验证码
    //返回样例:{"err_no":0,"err_str":"OK","pic_id":1662228516102,"pic_str":"8vka","md5":"35d5c7f6f53223fbdc5b72783db0c2c0","str_debug":""}
    function CJY_RecognizeBytes($user,$pass,$softid,$codetype,$userfile){
    $url = 'http://upload.chaojiying.net/Upload/Processing.php' ; 
    $fields = array( 
    'user'=>$user ,
    'pass2'=>$pass ,
    'softid'=>$softid ,
    'codetype'=>$codetype ,
    'userfile'=>"@$userfile" ,  //注意,当PHP版本高于5.5后，此行可能无效要改为下一行
    //'userfile'=> new CURLFile(realpath($userfile)),
    ); 

    $ch = curl_init() ;  
    curl_setopt($ch, CURLOPT_URL,$url) ;  
    curl_setopt($ch, CURLOPT_POST,count($fields)) ;   
    curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回  
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回  
    curl_setopt($ch, CURLOPT_REFERER,'') ; 
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3') ;
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));  //加入这行是为了让 curl 一次发送POST包,防止发送包里出现 Expect:100-continue 造成CDN节点返回417错误
    $result = curl_exec($ch); 
    curl_close($ch) ;

    return $result ;
    }
    //发送 base64字符串 
    function CJY_Post_base64($user,$pass,$softid,$codetype,$base64_str){
    $url = 'http://upload.chaojiying.net/Upload/Processing.php' ; 
    $fields = array( 
    'user'=>$user ,
    'pass2'=>$pass ,
    'softid'=>$softid ,
    'codetype'=>$codetype ,
    'file_base64'=>$base64_str
    ); 

    $ch = curl_init() ;  
    curl_setopt($ch, CURLOPT_URL,$url) ;  
    curl_setopt($ch, CURLOPT_POST,count($fields)) ;   
    curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回  
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回  
    curl_setopt($ch, CURLOPT_REFERER,'') ; 
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3') ;
    $result = curl_exec($ch); 
    curl_close($ch) ;

    return $result ;
    }

    //报告错误,只在验证码识别结果是错误的时候使用该函数
    //返回样例:{"err_no":0,"err_str":"OK"}
    function CJY_ReportError($user,$pass,$PicId,$SoftId){
    $url = 'http://code.chaojiying.net/Upload/ReportError.php' ; 
    $fields = array( 
    'user'=>$user ,
    'pass2'=>$pass ,
    'id'=>$PicId ,
    'softid'=>$SoftId ,
    ); 

    $ch = curl_init() ;  
    curl_setopt($ch, CURLOPT_URL,$url) ;  
    curl_setopt($ch, CURLOPT_POST,count($fields)) ;   
    curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回  
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回  
    curl_setopt($ch, CURLOPT_REFERER,'') ; 
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3') ;
    $result = curl_exec($ch); 
    curl_close($ch) ;

    return $result ;
    }


    }