<?php
  
  namespace Home\Controller;

use Home\Work\Cookie;
use Think\Controller;
  
  class IndexController extends Controller
    {
    public function account1()
    {

    $cookie = new Cookie;
    $goodsNum =$cookie->getGoodsNumber();
    $cookie = "NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1582956918873; macid=C87E6C3764B0000161E6B4027DB019DC; _ga=GA1.2.879713598.1561188145; pgv_pvi=7768772395; bdshare_firstime=1580351547920; sid=d92d9345-2898-4e64-a3dc-f017d88f62ec; Apache=113.121.232.197.1582952071890191; productid=-1; last_product_id=-1; softlinkdomain=; softlinkpage=; keyword=; engineid=; sourcetype=direct_access; CASGTC=GTC-17462EC9-12FA-4AD5-862E-C697873F5E08-1582954196982; accessid_settime=1582958290249; last_domain=http%3A//zhuce.changyou.com/newRegTLDeepPerson.act; tongji=adid__access_id_C8CF85D851E00001945911E016B22890_product_id_-1_source_type_direct_access_engine_id__key_word__soft_link_domain__soft_link_page__last_product_id_-1_last_domain_http%3A//zhuce.changyou.com/newRegTLDeepPerson.act_current_domain_http%3A//zhuce.changyou.com/newRegtlDeep.act_top_page_http%3A//zhuce.changyou.com/regInit.act%3FgameType%3DPE-DHSH_mac_id_C87E6C3764B0000161E6B4027DB019DC_mac_new_0_method_normal_sessionid_113.121.232.197.1582952071890191; NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1582959656738; accessid=; visittime=; qrcodeid=9a48b49bdf42d1d3cf02a9ad4eb5d3b6db2a89903024b3197c5d55774b367cc555c861a479275cb7d49f77faa7827abe; COOKIE_GOODS_SCANED=%25E9%258A%2598%25E9%2597%25A8%253D20200218017546443%253D455555.0%253D7%2527%25E5%258D%2596%253D202002131642560254%253D700.0%253D8%2527%25E6%25A3%258B%25E4%25B8%25AD%25E5%25BC%2588%25E3%2580%2581%253D202002182100139691%253D998.0%253D7%2527%25CB%258A%25EF%25B9%258F%25E9%25A3%258E%25E9%2580%258D%25E9%2581%25A5%25E3%2582%259D%253D202002221855593909%253D980.0%253D6%2527%25E6%25B5%25AE%25E7%2594%259F%25E5%25BD%2592%25E6%25A2%25A6%253D202002221856153911%253D521.0%253D8; JSESSIONID=7F57CE9F979AF5586405661A2306CBFE";

     while(true){
            $this->doStart($goodsNum,$cookie);
     }
    }

    //w25876511@changyou.com
    public function account2(){
    $cookie = new Cookie;
     $goodsNum =$cookie->getGoodsNumber();
     $cookie =  "sid=e3493c84-bbed-4146-b906-fb379719b68a; bdshare_firstime=1583046880382; UM_distinctid=17094f26ce62d1-0aa74f3b79c23d-3b654406-100200-17094f26ce71f8; CNZZDATA5453193=cnzz_eid%3D1400162038-1583045234-%26ntime%3D1583045234; qrcodeid=0cbb7b0a506e6a993bee1fe106fd1f78b450f20dd3e83d6a4c28d2a77dc56be3323b2ce428fcf786e13d02af81c61e7c; COOKIE_GOODS_SCANED=%25E3%2581%2584%25E4%25B8%2583%25E6%2598%259F%25E8%2581%259A%25E9%25A6%2596%25E3%2580%2581%253D202002222326078648%253D418900.0%253D7%2527; JSESSIONID=E7D2E29C7D9E997A871B337082E18731";
     while(true){
          $this->doStart($goodsNum,$cookie);
     }
    }

    //w25876522@changyou.com
    public function account3(){
    $cookie = new Cookie;
    $goodsNum =$cookie->getGoodsNumber();
    $cookie =  "NOTE_UPDATE_TIME=1583046496069; NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; macid=C87E6C3764B0000161E6B4027DB019DC; _ga=GA1.2.879713598.1561188145; pgv_pvi=7768772395; bdshare_firstime=1580351547920; sid=d1d708fd-dc73-475b-836b-9f3026b72bcb; qrcodeid=c349af639fb02da5342e5096ec1b9612980a2f5709a17442d57986c3b68da091ceeac5f2e34ba48aa41c939e1a41c38d; COOKIE_GOODS_SCANED=%25E3%2581%2584%25E4%25B8%2583%25E6%2598%259F%25E8%2581%259A%25E9%25A6%2596%25E3%2580%2581%253D202002222326078648%253D418900.0%253D7%2527%25E6%2599%2593%25E5%25B1%25B1%25E9%259D%2592%25E2%2584%25A1%253D202002231529586544%253D566.0%253D11%2527%25E4%25BA%2591%25E5%25A4%25A9%25E3%2583%259F%253D202002231610277102%253D500.0%253D5%2527%25E6%25AD%25A5%25E6%25AD%25A5%25E3%2580%2586%25E6%2583%258A%25E5%25BF%2583%253D202002241025018500%253D150.0%253D1%2527%25E6%25B0%25B8%25E8%25BF%259C%25E7%259A%2584%25E5%258F%2581%25E5%2593%25A5%253D202002291736187304%253D479.0%253D7; JSESSIONID=838BB2E82F5BB566E8C4CEE41722CE2A";
    while(true){
         $this->doStart($goodsNum,$cookie);
    }
   }

    public  function doStart($goodsNum,$cookie)
    {
       $res=$this->getImgTem($cookie,$goodsNum);
        $code =$res['code'];
        $pic = $res['id'];
      
        print_r($res);
        if($code){
            echo "开始下单";
            $result=$this->doOrder($goodsNum,$code,$cookie);
            print_r($result) ;
            // if($result=="captcha_error"){
            //      echo "识别失败 开始退单";
            //     echo "\n";
            //     $msg=$this->CJY_ReportError('w258765',md5('w258765'),$pic,'217309ae4cb4d37f8c85e26b6fad0159');
            //     echo "退单完成，返回信息".json_encode($msg);
            //     echo "\n";
            // }
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
            "Cookie: "."$cookie",
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

        echo json_encode($result);
       
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
    "Cookie: "."$cookie",
    "Content-Type: application/x-www-form-urlencoded",
    "User-Agent: PostmanRuntime/7.22.0",
    "Accept: */*",
    "Cache-Control: no-cache",
    "Postman-Token: fc64ff82-f09a-489b-a25c-be97360519a9",
    "Host: tl.cyg.changyou.com",
    "Accept-Encoding: gzip, deflate, br",
    "Content-Length: 53",
    "Connection: keep-alive"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
// print_r($response);

return $response;
    }


    public function tlbbChang($cookie,$goodsNum,$img){ 

            try{

        //超级鹰账号信息
        $user		= 'w258765';				//超级鹰用户账号
        $pass		= md5('w258765');			//经过md5加密的密码
        $softid		= '217309ae4cb4d37f8c85e26b6fad0159';			//软件ID 用户中心>软件ID 可以生成
        $codetype	= '1902' ;			//码图类型,查看更多类型 https://www.chaojiying.com/price.html
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
