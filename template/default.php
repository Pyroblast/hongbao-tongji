<?php
$a = gaikuang();
if (!isset($a[today_xinzengyonghu])) {
  $a[today_xinzengyonghu] = "空";
}
if (!isset($a[today_xinzengshebei])) {
  $a[today_xinzengshebei] = "空";
}
if (!isset($a[today_huoyueyonghu])) {
  $a[today_huoyueyonghu] = "空";
}
if (!isset($a[today_leijiyonghu])) {
  $a[today_leijiyonghu] = "空";
}
if (!isset($a[today_logxinzeng])) {
  $a[today_logxinzeng] = "空";
}
if (!isset($a[today_loghuoyue])) {
  $a[today_loghuoyue] = "空";
}
if (!isset($a[now_guanggao])) {
  $a[now_guanggao] = "空";
}
if (!isset($a[now_cpa])) {
  $a[now_cpa] = "空";
}
echo "
<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>新增用户 <abbr title='数据库中的真实注册新增用户数'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[today_xinzengyonghu]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_xinzengyonghu]."'>$a[baifen_xinzengyonghu]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>新增设备 <abbr title='数据库中的真实新增设备数'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[today_xinzengshebei]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_xinzengshebei]."'>$a[baifen_xinzengshebei]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>活跃用户 <abbr title='估算值，从数据库的100个加分表中随机抽取10个表，计算活跃用户后乘以10后作为总活跃用户'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[today_huoyueyonghu]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_huoyueyonghu]."'>$a[baifen_huoyueyonghu]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>累积用户 <abbr title='数据库中到目前为止注册且状态正常的用户数'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[today_leijiyonghu]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_leijiyonghu]."'>$a[baifen_leijiyonghu]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>log新增用户 <abbr title='上传日志中的新增用户'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[today_logxinzeng]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_logxinzeng]."'>$a[baifen_logxinzeng]&nbsp&nbsp</span>
    </div>
  </div>
</div>

</div>
<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>log活跃用户 <abbr title='上传日志中的活跃用户'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[today_loghuoyue]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_loghuoyue]."'>$a[baifen_loghuoyue]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>用户平均显示广告数 <abbr title='平均广告数的计算方式是过去一分钟每一个独立用户的最大广告数的平均值'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>6分钟前</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[now_guanggao]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_guanggao]."'>$a[baifen_guanggao]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-3'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>CPA <abbr title='红包锁屏接入积分墙所产生的广告激活数'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <h1 class='text-center'><b>$a[now_cpa]</b></h1>
    <div align='right'>
        <span style='color: ".$a[color_cpa]."'>$a[baifen_cpa]&nbsp&nbsp</span>
    </div>
  </div>
</div>
</div>
";

$title1 = "新增用户";
$title2 = "新增设备";
$title3 = "活跃用户";
$title4 = "累积用户";
$title5 = "log新增用户";
$title6 = "log活跃用户";
$title7 = "cpa";
$sql1a = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='";
$sql1b = "' AND `type` ='user_add_pv' AND os_type='android'";
$sql2a = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='";
$sql2b = "' AND `type` ='user_add_device' AND os_type='android'";
$sql3a = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='";
$sql3b = "' AND `type` ='user_active_pv' AND os_type='android'";
$sql4a = "SELECT SUM(`value`) FROM stat_zhuan_summary WHERE `interval`='0' AND data_time='";
$sql4b = "' AND `type` ='user_remain_pv' AND os_type='android'";
$sql5a = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='";
$sql5b = "' AND `type` ='user_add_uv'  AND channel='-' AND app_version='-'";
$sql6a = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='0' AND data_time='";
$sql6b = "' AND `type` ='user_active_uv'  AND channel='-' AND app_version='-'";
$sql7a = "SELECT `value` FROM stat_zhuan_cpa WHERE `interval` ='0' AND data_time='";
$sql7b = "' AND `os_type` = 'android'  AND `channel_id` = '1'";
/*
echo "<div class='well col-sm-12'>";
table($title1,$sql1a,$sql1b);
table($title2,$sql2a,$sql2b);
zhucelv();
echo "</div>";
echo "<div class='well col-sm-12'>";
table($title3,$sql3a,$sql3b);
table($title4,$sql4a,$sql4b);
echo "</div>";
echo "<div class='well col-sm-12'>";
table($title5,$sql5a,$sql5b);
table($title6,$sql6a,$sql6b);
echo "</div>";
*/
echo "<div class='col-sm-12'>";
LineChart($title1,$sql1a,$sql1b,"user_add");
LineChart($title2,$sql2a,$sql2b,"device_add");
zhucelvChart();
LineChart($title3,$sql3a,$sql3b,"user_active");
LineChart($title4,$sql4a,$sql4b,"user_remain");
LineChart($title5,$sql5a,$sql5b,"user_add_log");
LineChart($title6,$sql6a,$sql6b,"user_active_log");
LineChart($title7,$sql7a,$sql7b,"cpa");
echo "</div>";
?>
