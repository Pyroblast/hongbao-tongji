<?php
function gaikuang()
{
  include('dbc.php');
  $t = mktime(0,0,0, date('m', time() - (1 * 24 * 60 * 60)), date('d', time() - (1 * 24 * 60 * 60)), date('Y', time() - (1 * 24 * 60 * 60)));
  $today = date("Y-m-d H:i:s",$t);
  $y = mktime(0,0,0, date('m', time() - (2 * 24 * 60 * 60)), date('d', time() - (2 * 24 * 60 * 60)), date('Y', time() - (2 * 24 * 60 * 60)));
  $yesterday = date("Y-m-d H:i:s",$y);
  
  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_pv' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_xinzengyonghu = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_add_pv' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_xinzengyonghu = $row['0'];
  if ((int)$today_xinzengyonghu > (int)$yesterday_xinzengyonghu) {
    $color_xinzengyonghu = "red";
  } else {
    $color_xinzengyonghu = "green";
  }
  if ((int)$yesterday_xinzengyonghu==0) {
    $baifen_xinzengyonghu = 0;
  } else {
    $baifen_xinzengyonghu = round((((int)$today_xinzengyonghu - (int)$yesterday_xinzengyonghu)/(int)$yesterday_xinzengyonghu)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_device' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_xinzengshebei = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_add_device' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_xinzengshebei = $row['0'];

  if ((int)$today_xinzengshebei > (int)$yesterday_xinzengshebei) {
    $color_xinzengshebei = "red";
  } else {
    $color_xinzengshebei = "green";
  }
  if ((int)$yesterday_xinzengshebei==0) {
    $baifen_xinzengshebei = 0;
  } else {
    $baifen_xinzengshebei = round((((int)$today_xinzengshebei - (int)$yesterday_xinzengshebei)/(int)$yesterday_xinzengshebei)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_remain_pv' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_leijiyonghu = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_remain_pv' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_leijiyonghu = $row['0'];

  if ((int)$today_leijiyonghu > (int)$yesterday_leijiyonghu) {
    $color_leijiyonghu = "red";
  } else {
    $color_leijiyonghu = "green";
  }
  if ((int)$yesterday_leijiyonghu==0) {
    $baifen_leijiyonghu = 0;
  } else {
    $baifen_leijiyonghu = round((((int)$today_leijiyonghu - (int)$yesterday_leijiyonghu)/(int)$yesterday_leijiyonghu)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_active_pv' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_huoyueyonghu = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_active_pv' AND os_type='android'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_huoyueyonghu = $row['0'];

  if ((int)$today_huoyueyonghu > (int)$yesterday_huoyueyonghu) {
    $color_huoyueyonghu = "red";
  } else {
    $color_huoyueyonghu = "green";
  }
  if ((int)$yesterday_huoyueyonghu==0) {
    $baifen_huoyueyonghu = 0;
  } else {
    $baifen_huoyueyonghu = round((((int)$today_huoyueyonghu - (int)$yesterday_huoyueyonghu)/(int)$yesterday_huoyueyonghu)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_uv'  AND channel='-' AND app_version='-'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_logxinzeng = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_add_uv'  AND channel='-' AND app_version='-'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_logxinzeng = $row['0'];

  if ((int)$today_logxinzeng > (int)$yesterday_logxinzeng) {
    $color_logxinzeng = "red";
  } else {
    $color_logxinzeng = "green";
  }
  if ((int)$yesterday_logxinzeng==0) {
    $baifen_logxinzeng = 0;
  } else {
    $baifen_logxinzeng = round((((int)$today_logxinzeng - (int)$yesterday_logxinzeng)/(int)$yesterday_logxinzeng)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_active_uv'  AND channel='-' AND app_version='-'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_loghuoyue = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_active_uv'  AND channel='-' AND app_version='-'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_loghuoyue = $row['0'];

  if ((int)$today_loghuoyue > (int)$yesterday_loghuoyue) {
    $color_loghuoyue = "red";
  } else {
    $color_loghuoyue = "green";
  }
  if ((int)$yesterday_loghuoyue==0) {
    $baifen_loghuoyue = 0;
  } else {
    $baifen_loghuoyue = round((((int)$today_loghuoyue - (int)$yesterday_loghuoyue)/(int)$yesterday_loghuoyue)*100,1).'%';
  }
//用户平均广告数
  $now = mktime(date('H', time() - (6 * 60)),date('i', time() - (6 * 60)),0, date('m', time()), date('d', time()), date('Y', time()));
  $minute_now = date("Y-m-d H:i:s",$now);

  $past = mktime(date('H', time() - (7 * 60)),date('i', time() - (7 * 60)),0, date('m', time()), date('d', time()), date('Y', time()));
  $minute_past = date("Y-m-d H:i:s",$past);

  $sql = "SELECT `value` FROM stat_zhuan_ad_avg WHERE data_time='" . "$minute_now" . "'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $now_guanggao = $row['0'];

  $sql = "SELECT `value` FROM stat_zhuan_ad_avg WHERE data_time='" . "$minute_past" . "'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $past_guanggao = $row['0'];

  if ((int)$now_guanggao > (int)$past_guanggao) {
    $color_guanggao = "red";
  } else {
    $color_guanggao = "green";
  }
  if ((int)$past_guanggao==0) {
    $baifen_guanggao = 0;
  } else {
    $baifen_guanggao = round((((int)$now_guanggao - (int)$past_guanggao)/(int)$past_guanggao)*100,1).'%';
  }
//CPA数
  $sql = "SELECT `value` FROM stat_zhuan_cpa WHERE `interval` ='0' AND data_time='" . "$today" . "' AND `os_type` = 'android'  AND `channel_id` = '1'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $now_cpa = $row['0'];

  $sql = "SELECT `value` FROM stat_zhuan_cpa WHERE `interval` ='0' AND data_time='" . "$yesterday" . "' AND `os_type` = 'android'  AND `channel_id` = '1'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $past_cpa = $row['0'];

  if ((int)$now_cpa > (int)$past_cpa) {
    $color_cpa = "red";
  } else {
    $color_cpa = "green";
  }
  if ((int)$past_cpa==0) {
    $baifen_cpa = 0;
  } else {
    $baifen_cpa = round((((int)$now_cpa - (int)$past_cpa)/(int)$past_cpa)*100,1).'%';
  }

  $array = array(
    'today_xinzengyonghu' => $today_xinzengyonghu,
    'yesterday_xinzengyonghu' => $yesterday_xinzengyonghu,
    'color_xinzengyonghu' => $color_xinzengyonghu,
    'baifen_xinzengyonghu' => $baifen_xinzengyonghu,
    'today_xinzengshebei' => $today_xinzengshebei,
    'yesterday_xinzengshebei' => $yesterday_xinzengshebei,
    'color_xinzengshebei' => $color_xinzengshebei,
    'baifen_xinzengshebei' => $baifen_xinzengshebei,
    'today_leijiyonghu' => $today_leijiyonghu,
    'yesterday_leijiyonghu' => $yesterday_leijiyonghu,
    'color_leijiyonghu' => $color_leijiyonghu,
    'baifen_leijiyonghu' => $baifen_leijiyonghu,
    'today_huoyueyonghu' => $today_huoyueyonghu,
    'yesterday_huoyueyonghu' => $yesterday_huoyueyonghu,
    'color_huoyueyonghu' => $color_huoyueyonghu,
    'baifen_huoyueyonghu' => $baifen_huoyueyonghu,
    'today_logxinzeng' => $today_logxinzeng,
    'yesterday_logxinzeng' => $yesterday_logxinzeng,
    'color_logxinzeng' => $color_logxinzeng,
    'baifen_logxinzeng' => $baifen_logxinzeng,
    'today_loghuoyue' => $today_loghuoyue,
    'yesterday_loghuoyue' => $yesterday_loghuoyue,
    'color_loghuoyue' => $color_loghuoyue,
    'baifen_loghuoyue' => $baifen_loghuoyue,
    'now_guanggao' => $now_guanggao,
    'past_guanggao' => $past_guanggao,
    'color_guanggao' => $color_guanggao,
    'baifen_guanggao' => $baifen_guanggao,
    'now_cpa' => $now_cpa,
    'past_cpa' => $past_cpa,
    'color_cpa' => $color_cpa,
    'baifen_cpa' => $baifen_cpa,
   );
  return $array;
}

function ios()
{
  include('dbc.php');
  $t = mktime(0,0,0, date('m', time() - (1 * 24 * 60 * 60)), date('d', time() - (1 * 24 * 60 * 60)), date('Y', time() - (1 * 24 * 60 * 60)));
  $today = date("Y-m-d H:i:s",$t);
  $y = mktime(0,0,0, date('m', time() - (2 * 24 * 60 * 60)), date('d', time() - (2 * 24 * 60 * 60)), date('Y', time() - (2 * 24 * 60 * 60)));
  $yesterday = date("Y-m-d H:i:s",$y);

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_pv' AND os_type='ios'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_xinzengyonghu = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_add_pv' AND os_type='ios'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_xinzengyonghu = $row['0'];
  if ((int)$today_xinzengyonghu > (int)$yesterday_xinzengyonghu) {
    $color_xinzengyonghu = "red";
  } else {
    $color_xinzengyonghu = "green";
  }
  if ((int)$yesterday_xinzengyonghu==0) {
    $baifen_xinzengyonghu = 0;
  } else {
    $baifen_xinzengyonghu = round((((int)$today_xinzengyonghu - (int)$yesterday_xinzengyonghu)/(int)$yesterday_xinzengyonghu)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_remain_pv' AND os_type='ios'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_leijiyonghu = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_remain_pv' AND os_type='ios'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_leijiyonghu = $row['0'];

  if ((int)$today_leijiyonghu > (int)$yesterday_leijiyonghu) {
    $color_leijiyonghu = "red";
  } else {
    $color_leijiyonghu = "green";
  }
  if ((int)$yesterday_leijiyonghu==0) {
    $baifen_leijiyonghu = 0;
  } else {
    $baifen_leijiyonghu = round((((int)$today_leijiyonghu - (int)$yesterday_leijiyonghu)/(int)$yesterday_leijiyonghu)*100,1).'%';
  }

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_active_pv' AND os_type='ios'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $today_huoyueyonghu = $row['0'];

  $sql = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$yesterday" . "' AND `type` ='user_active_pv' AND os_type='ios'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $yesterday_huoyueyonghu = $row['0'];

  if ((int)$today_huoyueyonghu > (int)$yesterday_huoyueyonghu) {
    $color_huoyueyonghu = "red";
  } else {
    $color_huoyueyonghu = "green";
  }
  if ((int)$yesterday_huoyueyonghu==0) {
    $baifen_huoyueyonghu = 0;
  } else {
    $baifen_huoyueyonghu = round((((int)$today_huoyueyonghu - (int)$yesterday_huoyueyonghu)/(int)$yesterday_huoyueyonghu)*100,1).'%';
  }

  $array = array(
    'today_xinzengyonghu' => $today_xinzengyonghu,
    'yesterday_xinzengyonghu' => $yesterday_xinzengyonghu,
    'color_xinzengyonghu' => $color_xinzengyonghu,
    'baifen_xinzengyonghu' => $baifen_xinzengyonghu,
    'today_leijiyonghu' => $today_leijiyonghu,
    'yesterday_leijiyonghu' => $yesterday_leijiyonghu,
    'color_leijiyonghu' => $color_leijiyonghu,
    'baifen_leijiyonghu' => $baifen_leijiyonghu,
    'today_huoyueyonghu' => $today_huoyueyonghu,
    'yesterday_huoyueyonghu' => $yesterday_huoyueyonghu,
    'color_huoyueyonghu' => $color_huoyueyonghu,
    'baifen_huoyueyonghu' => $baifen_huoyueyonghu,
   );
  return $array;
}

/*
function get_data()
{
	$opts['http'] = array('method' => "GET", 'timeout'=>60,);
    $context = stream_context_create($opts);
    $url = "http://www.gamebaike.com/api/coin.php";
    $html =  file_get_contents($url,false,$context);
    $data = json_decode($html,true);
    return $data;
}
*/

function table ($title,$sqla,$sqlb)
{
	include('dbc.php');
	echo "<div class='col-sm-6 col-md-4'>
        <div class='panel panel-primary'>
          <div class='panel-heading'>$title</div>
            <table class='table table-hover table-bordered'>
              <thead>
                <tr>
                <th>日期</th>
                <th>数据</th>
                </tr>
              </thead>
              <tbody>
              ";
  for ($i=1; $i < 15; $i++) { 
    $t = mktime(0,0,0, date('m', time() - ($i * 24 * 60 * 60)), date('d', time() - ($i * 24 * 60 * 60)), date('Y', time() - ($i * 24 * 60 * 60)));
    $today = date("Y-m-d H:i:s",$t);
    $date = date("Y-m-d",$t);
    $sql = $sqla . $today . $sqlb;
    $rs = $db->query($sql);
    $row = $rs->fetch();
    echo 
          "<tr>
          <td>$date</td>  
          <td>$row[0]</td>
          </tr>
          ";
  }
  echo "</tbody>
          </table>
          </div>
          </div>
          ";
}

function zhucelv ()
{
  include('dbc.php');
  echo "<div class='col-sm-6 col-md-4'>
        <div class='panel panel-primary'>
          <div class='panel-heading'>注册率</div>
            <table class='table table-hover table-bordered'>
              <thead>
                <tr>
                <th>日期</th>
                <th>数据</th>
                </tr>
              </thead>
              <tbody>
              ";
  for ($i=1; $i < 15; $i++) { 
    $t = mktime(0,0,0, date('m', time() - ($i * 24 * 60 * 60)), date('d', time() - ($i * 24 * 60 * 60)), date('Y', time() - ($i * 24 * 60 * 60)));
    $today = date("Y-m-d H:i:s",$t);
    $date = date("Y-m-d",$t);
    $sql1 = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_pv' AND os_type='android'";
    $sql2 = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_device' AND os_type='android'";
    $rs1 = $db->query($sql1);
    $row1 = $rs1->fetch();
    $rs2 = $db->query($sql2);
    $row2 = $rs2->fetch();
    if ((int)$row2[0]==0) {
      $zhucelv = "无";
    } else {
      $zhucelv = round((((int)$row1[0])/(int)$row2[0])*100,3).'%';
    }
    echo 
          "<tr>
          <td>$date</td>  
          <td>$zhucelv</td>
          </tr>
          ";
  }
  echo "</tbody>
          </table>
          </div>
          </div>
          ";
}

function LineChart ($title,$sqla,$sqlb,$chart)
{
echo "<div class='panel panel-default'>
        <div class='panel-heading '>
          <div style='float:left'><b>$title</b></div><div style='text-align:right'><abbr title='导出功能即将开放，敬请期待！'><img src='./icon/export.png' class='icon-20'alt='导出'></abbr></div>
        </div>
        <div class='panel-body' id='$chart' style='height: 250px;width: 100%;'>
        </div>
        <ul class='list-group'>
          <li class='list-group-item text-center'><span style='color:rgb(11, 98, 164)'>蓝色：</span>当日&nbsp&nbsp&nbsp&nbsp<span style='color:#e5412d'>红色：</span>7日前</li>
        </ul>
      </div>
      ";
echo "<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: '$chart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [";

include('dbc.php');
for ($i=1; $i < 8; $i++) { 
    $t = mktime(0,0,0, date('m', time() - ($i * 24 * 60 * 60)), date('d', time() - ($i * 24 * 60 * 60)), date('Y', time() - ($i * 24 * 60 * 60)));
    $today = date("Y-m-d H:i:s",$t);
    $date = date("Y-m-d",$t);
    $sql = $sqla . $today . $sqlb;
    $rs = $db->query($sql);
    $row = $rs->fetch();

    $j = $i + 7;
    $t2 = mktime(0,0,0, date('m', time() - ($j * 24 * 60 * 60)), date('d', time() - ($j * 24 * 60 * 60)), date('Y', time() - ($j * 24 * 60 * 60)));
    $today2 = date("Y-m-d H:i:s",$t2);
    $date2 = date("Y-m-d",$t2);
    $sql2 = $sqla . $today2 . $sqlb;
    $rs2 = $db->query($sql2);
    $row2 = $rs2->fetch();
    if ($row[0] && $row2[0]){
      echo "{ d: '" . $date . "', value: " . $row[0] . ",value2: " . $row2[0] . "},";
    } elseif ($row[0]){
      echo "{ d: '" . $date . "', value: " . $row[0] .  "},";
    } elseif ($row2[0]){
      echo "{ d: '" . $date . "',value2: " . $row2[0] . "},";
    } else {
      echo "{ d: '" . $date . "'},";
    }
  }
/*echo "
    { d: '2015-01-19', value: 20 ,value2: 30},
    { d: '2015-01-18', value: 10 ,value2: 20},
    { d: '2015-01-17', value: 5 ,value2: 15},
    { d: '2015-01-16', value: 5 ,value2: 15},
    { d: '2015-01-15', value: 20 ,value2: 30},
    { d: '2015-01-14', value: 30 ,value2: 35},
    { d: '2015-01-13', value: 40 ,value2: 45},
    ";
*/
echo "],
  // The name of the data record attribute that contains x-values.
  xkey: 'd',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value','value2'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['当日','7日前'],
  xLabels: 'day',
  lineColors: ['#0b62a4', '#e5412d', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
});
</script>";
}

function zhucelvChart ()
{
echo "<div class='panel panel-default'>
        <div class='panel-heading '>
          <div style='float:left'><b>注册率</b></div><div style='text-align:right'><abbr title='导出功能即将开放，敬请期待！'><img src='./icon/export.png' class='icon-20'alt='导出'></abbr></div>
        </div>
        <div class='panel-body' id='zhucelvchart' style='height: 250px;width: 100%;'>
        </div>
        <ul class='list-group'>
          <li class='list-group-item text-center'><span style='color:rgb(11, 98, 164)'>蓝色：</span>当日&nbsp&nbsp&nbsp&nbsp<span style='color:#e5412d'>红色：</span>7日前</li>
        </ul>
      </div>
      ";
echo "<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'zhucelvchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [";

include('dbc.php');
for ($i=1; $i < 8; $i++) { 
    $t = mktime(0,0,0, date('m', time() - ($i * 24 * 60 * 60)), date('d', time() - ($i * 24 * 60 * 60)), date('Y', time() - ($i * 24 * 60 * 60)));
    $today = date("Y-m-d H:i:s",$t);
    $date = date("Y-m-d",$t);
    $sql1 = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_pv' AND os_type='android'";
    $sql2 = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type` ='user_add_device' AND os_type='android'";
    $rs1 = $db->query($sql1);
    $row1 = $rs1->fetch();
    $rs2 = $db->query($sql2);
    $row2 = $rs2->fetch();
    if ((int)$row2[0]==0) {
      $zhucelv1 = "无";
    } else {
      $zhucelv1 = round((((int)$row1[0])/(int)$row2[0]),3);
    }

    $j = $i + 7;
    $t2 = mktime(0,0,0, date('m', time() - ($j * 24 * 60 * 60)), date('d', time() - ($j * 24 * 60 * 60)), date('Y', time() - ($j * 24 * 60 * 60)));
    $today2 = date("Y-m-d H:i:s",$t2);
    $date2 = date("Y-m-d",$t2);
    $sql3 = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today2" . "' AND `type` ='user_add_pv' AND os_type='android'";
    $sql4 = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='" . "$today2" . "' AND `type` ='user_add_device' AND os_type='android'";
    $rs3 = $db->query($sql3);
    $row3 = $rs3->fetch();
    $rs4 = $db->query($sql4);
    $row4 = $rs4->fetch();
    if ((int)$row4[0]==0) {
      $zhucelv2 = "无";
    } else {
      $zhucelv2 = round((((int)$row3[0])/(int)$row4[0]),3);
    }

    if ($zhucelv1 !== "无" && $zhucelv2 !== "无"){
      echo "{ d: '" . $date . "', value: " . $zhucelv1 . ",value2: " . $zhucelv2 . "},";
    } elseif ($zhucelv1 !== "无" && $zhucelv2 == "无"){
      echo "{ d: '" . $date . "', value: " . $zhucelv1 .  "},";
    } elseif ($zhucelv1 == "无" && $zhucelv2 !== "无"){
      echo "{ d: '" . $date . "',value2: " . $zhucelv2 . "},";
    } else {
      echo "{ d: '" . $date . "'},";
    }
  }
/*echo "
    { d: '2015-01-19', value: 20 ,value2: 30},
    { d: '2015-01-18', value: 10 ,value2: 20},
    { d: '2015-01-17', value: 5 ,value2: 15},
    { d: '2015-01-16', value: 5 ,value2: 15},
    { d: '2015-01-15', value: 20 ,value2: 30},
    { d: '2015-01-14', value: 30 ,value2: 35},
    { d: '2015-01-13', value: 40 ,value2: 45},
    ";
*/
echo "],
  // The name of the data record attribute that contains x-values.
  xkey: 'd',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value','value2'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['当日','7日前'],
  xLabels: 'day',
  lineColors: ['#0b62a4', '#e5412d', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
});
</script>";
}

function qudaodata ($channel)
{
  include('dbc.php');
  $t = mktime(0,0,0, date('m', time() - (1 * 24 * 60 * 60)), date('d', time() - (1 * 24 * 60 * 60)), date('Y', time() - (1 * 24 * 60 * 60)));
  $today = date("Y-m-d H:i:s",$t);
  $sql = "SELECT SUM(VALUE) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='" . "$today" . "' AND `type`='user_add_pv' AND `channel`='" . "$channel" . "'";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  if(isset($row['0'])) {
    return $row['0'];
  } else {
    return '0';
  }
}

function loghourChart ($title,$sqla,$sqlb,$chart)
{
echo "<div class='panel panel-default'>
        <div class='panel-heading '>
          <div style='float:left'><b>$title</b></div><div style='text-align:right'><abbr title='导出功能即将开放，敬请期待！'><img src='./icon/export.png' class='icon-20'alt='导出'></abbr></div>
        </div>
        <div class='panel-body' id='$chart' style='height: 250px;width: 100%;'>
        </div>
        <ul class='list-group'>
          <li class='list-group-item text-center'><span style='color:rgb(11, 98, 164)'>蓝色：</span>当日&nbsp&nbsp&nbsp&nbsp<span style='color:#e5412d'>红色：</span>24小时前</li>
        </ul>
      </div>
      ";
echo "<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: '$chart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [";

include('dbc.php');
for ($i=0; $i < 24; $i++) { 
    $t = mktime($i,0,0, date('m', time()), date('d', time()), date('Y', time()));
    $today = date("Y-m-d H:i:s",$t);
    $sql = $sqla . $today . $sqlb;
    $rs = $db->query($sql);
    $row = $rs->fetch();

    $t2 = mktime($i,0,0, date('m', time() - (1 * 24 * 60 * 60)), date('d', time() - (1 * 24 * 60 * 60)), date('Y', time() - (1 * 24 * 60 * 60)));
    $today2 = date("Y-m-d H:i:s",$t2);
    $sql2 = $sqla . $today2 . $sqlb;
    $rs2 = $db->query($sql2);
    $row2 = $rs2->fetch();
    if ($row[0] && $row2[0]){
      echo "{ d: '" . $today . "', value: " . $row[0] . ",value2: " . $row2[0] . "},";
    } elseif ($row[0]){
      echo "{ d: '" . $today . "', value: " . $row[0] .  "},";
    } elseif ($row2[0]){
      echo "{ d: '" . $today . "',value2: " . $row2[0] . "},";
    } else {
      echo "{ d: '" . $today . "'},";
    }
  }
/*echo "
    { d: '2015-01-19', value: 20 ,value2: 30},
    { d: '2015-01-18', value: 10 ,value2: 20},
    { d: '2015-01-17', value: 5 ,value2: 15},
    { d: '2015-01-16', value: 5 ,value2: 15},
    { d: '2015-01-15', value: 20 ,value2: 30},
    { d: '2015-01-14', value: 30 ,value2: 35},
    { d: '2015-01-13', value: 40 ,value2: 45},
    ";
*/
echo "],
  // The name of the data record attribute that contains x-values.
  xkey: 'd',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value','value2'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['当日','24小时前'],
  xLabels: 'hour',
  lineColors: ['#0b62a4', '#e5412d', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
});
</script>";
}
function logAdAvgChart ($title,$sqla,$sqlb,$chart)
{
echo "<div class='panel panel-default'>
        <div class='panel-heading '>
          <div style='float:left'><b>$title</b></div><div style='text-align:right'><abbr title='导出功能即将开放，敬请期待！'><img src='./icon/export.png' class='icon-20'alt='导出'></abbr></div>
        </div>
        <div class='panel-body' id='$chart' style='height: 250px;width: 100%;'>
        </div>
        <ul class='list-group'>
          <li class='list-group-item text-center'><span style='color:rgb(11, 98, 164)'>蓝色：</span>当日&nbsp&nbsp&nbsp&nbsp<span style='color:#e5412d'>红色：</span>24小时前</li>
        </ul>
      </div>
      ";
echo "<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: '$chart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [";

include('dbc.php');
for ($i=0; $i < 61; $i++) { 
    $t = mktime(date('H', time() - ($i * 60)),date('i', time() - ($i * 60)),0, date('m', time()), date('d', time()), date('Y', time()));
    $today = date("Y-m-d H:i:s",$t);
    $sql = $sqla . $today . $sqlb;
    $rs = $db->query($sql);
    $row = $rs->fetch();

    $t2 = mktime(date('H', time() - ($i * 60)),date('i', time() - ($i * 60)),0, date('m', time() - (1 * 24 * 60 * 60)), date('d', time() - (1 * 24 * 60 * 60)), date('Y', time() - (1 * 24 * 60 * 60)));
    $today2 = date("Y-m-d H:i:s",$t2);
    $sql2 = $sqla . $today2 . $sqlb;
    $rs2 = $db->query($sql2);
    $row2 = $rs2->fetch();
    if ($row[0] && $row2[0]){
      echo "{ d: '" . $today . "', value: " . $row[0] . ",value2: " . $row2[0] . "},";
    } elseif ($row[0]){
      echo "{ d: '" . $today . "', value: " . $row[0] .  "},";
    } elseif ($row2[0]){
      echo "{ d: '" . $today . "',value2: " . $row2[0] . "},";
    } else {
      echo "{ d: '" . $today . "'},";
    }
  }
/*echo "
    { d: '2015-01-19', value: 20 ,value2: 30},
    { d: '2015-01-18', value: 10 ,value2: 20},
    { d: '2015-01-17', value: 5 ,value2: 15},
    { d: '2015-01-16', value: 5 ,value2: 15},
    { d: '2015-01-15', value: 20 ,value2: 30},
    { d: '2015-01-14', value: 30 ,value2: 35},
    { d: '2015-01-13', value: 40 ,value2: 45},
    ";
*/
echo "],
  // The name of the data record attribute that contains x-values.
  xkey: 'd',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value','value2'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['当日','24小时前'],
  xLabels: 'minute',
  lineColors: ['#0b62a4', '#e5412d', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
});
</script>";
}
function CpaChart ($title,$sqla,$sqlb,$chart)
{
echo "<div class='panel panel-default'>
        <div class='panel-heading '>
          <div style='float:left'><b>$title</b></div><div style='text-align:right'><abbr title='导出功能即将开放，敬请期待！'><img src='./icon/export.png' class='icon-20'alt='导出'></abbr></div>
        </div>
        <div class='panel-body' id='$chart' style='height: 250px;width: 100%;'>
        </div>
        <ul class='list-group'>
          <li class='list-group-item text-center'><span style='color:rgb(11, 98, 164)'>蓝色：</span>当日&nbsp&nbsp&nbsp&nbsp<span style='color:#e5412d'>红色：</span>24小时前</li>
        </ul>
      </div>
      ";
echo "<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: '$chart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [";

include('dbc.php');
for ($i=0; $i < 61; $i++) { 
    $t = mktime(date('H', time() - ($i * 60)),date('i', time() - ($i * 60)),0, date('m', time()), date('d', time()), date('Y', time()));
    $today = date("Y-m-d H:i:s",$t);
    $sql = $sqla . $today . $sqlb;
    $rs = $db->query($sql);
    $row = $rs->fetch();

    $t2 = mktime(date('H', time() - ($i * 60)),date('i', time() - ($i * 60)),0, date('m', time() - (1 * 24 * 60 * 60)), date('d', time() - (1 * 24 * 60 * 60)), date('Y', time() - (1 * 24 * 60 * 60)));
    $today2 = date("Y-m-d H:i:s",$t2);
    $sql2 = $sqla . $today2 . $sqlb;
    $rs2 = $db->query($sql2);
    $row2 = $rs2->fetch();
    if ($row[0] && $row2[0]){
      echo "{ d: '" . $today . "', value: " . $row[0] . ",value2: " . $row2[0] . "},";
    } elseif ($row[0]){
      echo "{ d: '" . $today . "', value: " . $row[0] .  "},";
    } elseif ($row2[0]){
      echo "{ d: '" . $today . "',value2: " . $row2[0] . "},";
    } else {
      echo "{ d: '" . $today . "'},";
    }
  }
/*echo "
    { d: '2015-01-19', value: 20 ,value2: 30},
    { d: '2015-01-18', value: 10 ,value2: 20},
    { d: '2015-01-17', value: 5 ,value2: 15},
    { d: '2015-01-16', value: 5 ,value2: 15},
    { d: '2015-01-15', value: 20 ,value2: 30},
    { d: '2015-01-14', value: 30 ,value2: 35},
    { d: '2015-01-13', value: 40 ,value2: 45},
    ";
*/
echo "],
  // The name of the data record attribute that contains x-values.
  xkey: 'd',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value','value2'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['当日','24小时前'],
  xLabels: 'minute',
  lineColors: ['#0b62a4', '#e5412d', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
});
</script>";
}
?>

