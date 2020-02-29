<?php
  
  namespace Home\Controller;
  
  use Think\Controller;
  
  class IndexController extends Controller
    {
    public function index()
    {
     while(true){
            $this->doStart();
     }
    }

    public  function doStart()
    {
        //cookie时间很久 超过半小时 验证码图片那里获取过来 通用于下订单
        $goodsNum = "202002221855593909";
        $preCookie = "Cookie: ";
        $bodyCookie =  "NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1582956918873; macid=C87E6C3764B0000161E6B4027DB019DC; _ga=GA1.2.879713598.1561188145; pgv_pvi=7768772395; bdshare_firstime=1580351547920; sid=d92d9345-2898-4e64-a3dc-f017d88f62ec; Apache=113.121.232.197.1582952071890191; productid=-1; last_product_id=-1; softlinkdomain=; softlinkpage=; keyword=; engineid=; sourcetype=direct_access; CASGTC=GTC-17462EC9-12FA-4AD5-862E-C697873F5E08-1582954196982; accessid_settime=1582958290249; last_domain=http%3A//zhuce.changyou.com/newRegTLDeepPerson.act; tongji=adid__access_id_C8CF85D851E00001945911E016B22890_product_id_-1_source_type_direct_access_engine_id__key_word__soft_link_domain__soft_link_page__last_product_id_-1_last_domain_http%3A//zhuce.changyou.com/newRegTLDeepPerson.act_current_domain_http%3A//zhuce.changyou.com/newRegtlDeep.act_top_page_http%3A//zhuce.changyou.com/regInit.act%3FgameType%3DPE-DHSH_mac_id_C87E6C3764B0000161E6B4027DB019DC_mac_new_0_method_normal_sessionid_113.121.232.197.1582952071890191; NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1582959656738; accessid=; visittime=; qrcodeid=70d0caf7a1fa14e49c624e8eb58520f3816a0613fdc0d52b19da6c978caa011c2a792814e2484ad159e2dddeb6b35e11; COOKIE_GOODS_SCANED=%25E3%2581%2583%25E7%2590%25B4%25E5%25A3%25B0%25E8%25A2%2585%25E8%25A2%2585%25EF%25B9%258E%253D202002221844423735%253D630.0%253D6%2527%25E7%2581%25AC%25E5%2585%2589%25E5%25A4%25B4%25E5%25BC%25BA%25E3%2580%2581%253D202002221639541873%253D1456.0%253D8%2527%25E5%2594%2590%25E9%25A6%25A8%25EF%25BC%258E%25E3%2581%25A3%253D202002221851413834%253D521.0%253D11%2527%25E4%25B8%25BF%25E8%25B2%25B4%25E8%2594%259F%25E4%25B8%25B6%25E6%2583%259F%25E7%25BE%258E%253D202002221848243772%253D599.0%253D7%2527%25E6%25AD%25A5%25E6%25AD%25A5%25E6%2583%258A%25E5%25BF%2583%25E5%25A4%25A9%25E5%25A0%2582%253D202002221719162443%253D600.0%253D8%2527; JSESSIONID=85476E90092C618B3A731B7DFA9E7D3A";
        $cookie = $preCookie . $bodyCookie;
        $res=$this->getImgTem($cookie,$goodsNum);
        $code =$res['code'];
        $pic = $res['id'];
        print_r($res);
        if($code){
            echo "开始下单";
            $result=$this->doOrder($goodsNum,$code,$cookie);
            if($result=="captcha_error"){
                 echo "识别失败 开始退单";
                echo "\n";
                $msg=$this->CJY_ReportError('w258765',md5('w258765'),$pic,'217309ae4cb4d37f8c85e26b6fad0159');
                echo "退单完成，返回信息".json_encode($msg);
                echo "\n";
            }
            print_r($result) ;
            echo "结束下单";
            echo "\n";
        }else{
            echo "识别失败";
            die();
        }
    }

    public function getImgTem($cookie,$goodsNum)
    {
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
            $cookie,
            "User-Agent: PostmanRuntime/7.22.0",
            "Accept: */*",
            "Cache-Control: no-cache",
            "Postman-Token: 000f22f7-3ad1-4f31-9afd-97ab48fcdf83",
            "Host: tl.cyg.changyou.com",
            "Accept-Encoding: gzip, deflate, br",
            "Content-Length: ",
            "Connection: keep-alive"
            ),
        ));
        
        $response = curl_exec($curl);

        $base64_image_final = base64_encode($response);

        echo "开始识别";
        echo "\n";
        $result=$this->tlbbChang($cookie,$goodsNum,$base64_image_final);
        echo "结束识别";
        echo "\n";

       
        if(!empty($result['code'])){
            return $result;
        }else{
            return null;
        }
        
    }

    public function doOrder($goodsNum,$code,$cookie)
    {
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://tl.cyg.changyou.com/transaction/buy?=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "goods_serial_num=$goodsNum&captcha_code=$code",
  CURLOPT_HTTPHEADER => array(
    $cookie,
    "Content-Type: application/x-www-form-urlencoded",
    $cookie, 
    "User-Agent: PostmanRuntime/7.22.0",
    "Accept: */*",
    "Cache-Control: no-cache",
    "Postman-Token: 12ef6def-d374-496b-a96e-e893c63bd45d",
    "Host: tl.cyg.changyou.com",
    "Accept-Encoding: gzip, deflate, br",
    "Content-Length: 53",
    "Connection: keep-alive"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
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
                'code'=>$reArray["pic_str"],
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

    ?>
