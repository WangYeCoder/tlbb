<?php
    namespace Home\Work;
    class Cookie extends Bases
    {
    public  function refreshCookie()
    {
        # code...

        //300m更新一次cookie
        
        while(true){
        //19121671996
        $account1=  "NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1582956918873; macid=C87E6C3764B0000161E6B4027DB019DC; _ga=GA1.2.879713598.1561188145; pgv_pvi=7768772395; bdshare_firstime=1580351547920; sid=d92d9345-2898-4e64-a3dc-f017d88f62ec; Apache=113.121.232.197.1582952071890191; productid=-1; last_product_id=-1; softlinkdomain=; softlinkpage=; keyword=; engineid=; sourcetype=direct_access; CASGTC=GTC-17462EC9-12FA-4AD5-862E-C697873F5E08-1582954196982; accessid_settime=1582958290249; last_domain=http%3A//zhuce.changyou.com/newRegTLDeepPerson.act; tongji=adid__access_id_C8CF85D851E00001945911E016B22890_product_id_-1_source_type_direct_access_engine_id__key_word__soft_link_domain__soft_link_page__last_product_id_-1_last_domain_http%3A//zhuce.changyou.com/newRegTLDeepPerson.act_current_domain_http%3A//zhuce.changyou.com/newRegtlDeep.act_top_page_http%3A//zhuce.changyou.com/regInit.act%3FgameType%3DPE-DHSH_mac_id_C87E6C3764B0000161E6B4027DB019DC_mac_new_0_method_normal_sessionid_113.121.232.197.1582952071890191; NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1582959656738; accessid=; visittime=; qrcodeid=9a48b49bdf42d1d3cf02a9ad4eb5d3b6db2a89903024b3197c5d55774b367cc555c861a479275cb7d49f77faa7827abe; COOKIE_GOODS_SCANED=%25E9%258A%2598%25E9%2597%25A8%253D20200218017546443%253D455555.0%253D7%2527%25E5%258D%2596%253D202002131642560254%253D700.0%253D8%2527%25E6%25A3%258B%25E4%25B8%25AD%25E5%25BC%2588%25E3%2580%2581%253D202002182100139691%253D998.0%253D7%2527%25CB%258A%25EF%25B9%258F%25E9%25A3%258E%25E9%2580%258D%25E9%2581%25A5%25E3%2582%259D%253D202002221855593909%253D980.0%253D6%2527%25E6%25B5%25AE%25E7%2594%259F%25E5%25BD%2592%25E6%25A2%25A6%253D202002221856153911%253D521.0%253D8; JSESSIONID=7F57CE9F979AF5586405661A2306CBFE";
        //w25876511@changyou.com    
        $account2=  "NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1583029091981; sid=90ed2a05-4290-4d30-93d1-b173b7e6a386; UM_distinctid=170935275ef17f-052465430c703a-3b654406-100200-170935275f01b6; bdshare_firstime=1583019620222; qrcodeid=0b1181c22a41d18a11ab4b706fa7cf78a6a2abdb3c1c23fec334850b46c6b00c607f47876a46d08d992246dc9b70c8c6; CNZZDATA5453193=cnzz_eid%3D1817888193-1583018234-%26ntime%3D1583029034; COOKIE_GOODS_SCANED=%25E9%258A%2598%25E9%2597%25A8%253D20200218017546443%253D455555.0%253D7%2527; JSESSIONID=61865B1FB3A2C5A0D5B2FC64CD82E";
        //w25876522@changyou.com
        $account3 ="NOTE_CACHE=%5B%7B%22id%22%3A200%2C%22title%22%3A%22%E6%B5%8B%E6%9C%8D%E9%BE%99%E9%97%A8NPC%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1432711191000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A198%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%E5%AE%8C%E6%88%90%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431314942000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A197%2C%22title%22%3A%22%E5%AE%A0%E7%88%B1%E4%B8%80%E7%94%9F%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BB%B4%E6%8A%A4%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1431312451000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A196%2C%22title%22%3A%22%E3%80%904%E6%9C%8817%E6%97%A5%E7%BB%B4%E6%8A%A4%E3%80%91%E7%95%85%E6%98%93%E9%98%81.%E9%81%93%E5%85%B7%E5%9D%8A%E7%BB%B4%E6%8A%A4%E5%85%AC%E5%91%8A%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1429156000000%2C%22context%22%3A%22'TL'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%2C%7B%22id%22%3A192%2C%22title%22%3A%22%E3%80%90%E6%96%B0%E5%A4%A9%E9%BE%99%E5%85%AB%E9%83%A8%E3%80%91%E4%BB%A4%E7%89%8C%E5%B1%95%E7%A4%BA%E5%8A%9F%E8%83%BD%E4%B8%8A%E7%BA%BF%E5%95%A6%EF%BC%81%22%2C%22content%22%3A%22%22%2C%22addTime%22%3A1427165782000%2C%22context%22%3A%22'TL''ZJ'%22%2C%22publishUser%22%3A%22%22%2C%22stick%22%3A0%2C%22stickTime%22%3Anull%2C%22deleteFlag%22%3A0%7D%5D; NOTE_UPDATE_TIME=1583030612773; sid=c7bbc57d-6663-4045-8565-7a3f7a210c9e; bdshare_firstime=1583020429620; UM_distinctid=170935ed1d2385-000af1ae224ee3-3b654406-100200-170935ed1d34de; Apache=113.121.232.197.1583020471046827; mac_new=1; productid=-1; last_product_id=-1; accessid=C8CFC12528000001845C13406FA4E390; accessid_settime=1583020470953; softlinkdomain=; softlinkpage=; keyword=; engineid=; sourcetype=direct_access; visittime=1583020470963; macid=C8CFC12528D00001CC79741010D010F1; last_domain=http%3A//zhuce.changyou.com/newRegtlDeep.act; tongji=adid__access_id_C8CFC12528000001845C13406FA4E390_product_id_-1_source_type_direct_access_engine_id__key_word__soft_link_domain__soft_link_page__last_product_id_-1_last_domain_http%3A//zhuce.changyou.com/newRegtlDeep.act_current_domain_http%3A//zhuce.changyou.com/newRegTLDeepPerson.act_top_page_http%3A//zhuce.changyou.com/regInit.act%3FgameType%3DPE-DHSH_mac_id_C8CFC12528D00001CC79741010D010F1_mac_new_1_method_normal_sessionid_113.121.232.197.1583020471046827; CNZZDATA5453193=cnzz_eid%3D1218421476-1583018234-%26ntime%3D1583029034; qrcodeid=632c95a3845845e369fc830a466b4a7238bc302e7209fe85c8ddbc36ae89b6329aa4a21ed2848a1219ef26f85d611b33; COOKIE_GOODS_SCANED=%25E7%258B%25AC%25E6%25AD%25A5%25E4%25B9%2584%25E4%25B8%25AD%25E5%258E%259F%25E3%2581%2590%253D202002112105231204%253D600000.0%253D2%2527%25E9%258A%2598%25E9%2597%25A8%253D20200218017546443%253D455555.0%253D7%2527%25E3%2581%2584%25E4%25B8%2583%25E6%2598%259F%25E8%2581%259A%25E9%25A6%2596%25E3%2580%2581%253D202002222326078648%253D418900.0%253D7%2527%25E2%2598%2585%25E5%25B0%258F%25E2%2597%258E%25E9%25A3%259E%25E2%2598%2585%253D202002231045072520%253D111.0%253D4%2527; JSESSIONID=49853149026CF573BF4FF675A433E705";
        
        $accountList= [
            'account1'=>$account1,
            'account2'=>$account2,
            'account3'=>$account3,
        ];

        foreach($accountList as $key =>$cookie){
            $this->requestSelf($cookie);
            sleep(1);
        }

        sleep(300);

    }

    }

    public function requestSelf($cookie){

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://tl.cyg.changyou.com/transaction/index",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "Cookie: "."$cookie",
    "Cookie: "."$cookie",
    "User-Agent: PostmanRuntime/7.22.0",
    "Accept: */*",
    "Cache-Control: no-cache",
    "Postman-Token: 119caab9-3993-40c9-a438-d83bbe1f3270",
    "Host: tl.cyg.changyou.com",
    "Accept-Encoding: gzip, deflate, br",
    "Content-Length: ",
    "Connection: keep-alive"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    }

    }






    ?>