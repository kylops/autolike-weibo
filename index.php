<?php
/**
 * Auto Like for Weibo
 * Author: kylops
 * version 1.0
 */

      $access_token = 'acc_token';
      $uid = 'uid';
      $url = 'https://api.weibo.com/2/statuses/user_timeline/ids.json?uid='.$uid.'&access_token='.$access_token.'&count=5';
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_HEADER,false);
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      $content=curl_exec($ch);
      curl_close($ch);
      // $res = json_decode( $json, true );

      $arr = json_decode($content, TRUE);

      $statuses = $arr['statuses'][0];
      // foreach ($statuses as $key => $id) {
         $like_url = 'https://api.weibo.com/2/attitudes/create.json?attitude=simle&access_token='.$access_token.'&id='.$statuses;
         // echo $like_url;
         $ch1 = curl_init();
         curl_setopt($ch1,CURLOPT_HEADER,false);
         curl_setopt($ch1,CURLOPT_URL,$like_url);
         curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
         // curl_close($ch1);
         // echo 'liked';

      // }

   ?>
