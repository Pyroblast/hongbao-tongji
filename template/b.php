<?php
echo "
<div class='col-sm-6 col-md-4'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>总渠道 <abbr title='定义待补充'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <div id='alldonut' style='height: 300px'></div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-4'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>内部渠道 <abbr title='定义待补充'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <div id='insidedonut' style='height: 300px'></div>
  </div>
</div>
</div>

<div class='col-sm-6 col-md-4'>
<div class='panel panel-default'>
  <div class='panel-heading'>
    <div style='float:left'><b>外部渠道 <abbr title='定义待补充'><img src='./icon/info.png' class='icon-15'alt='解释'></abbr></b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  <div class='panel-body'>
    <div id='outsidedonut' style='height: 300px'></div>
  </div>
</div>
</div>";

$in = array(
	'share' => qudaodata("share"),
	'wall' => qudaodata("wall"),
	'gameshare' => qudaodata("gameshare"),
	'guanwang' => qudaodata("guanwang"),
	'wechat' => qudaodata("wechat"),
	'lenovo' => array(
		'lenovo_share' => qudaodata("lenovo_share"), 
		), 
	);

$out = array(
	'appmarket' => array(
		'360' => qudaodata("360"),
		'ad07' => qudaodata("ad07"),
		'appchina' => qudaodata("appchina"),
		'baidu' => qudaodata("baidu"),
		'feifanruanjian' => qudaodata("feifanruanjian"),
		'hiapk' => qudaodata("hiapk"), 
		'lenovo_leshangdian' => qudaodata("lenovo_leshangdian"),
		'meizu' => qudaodata("meizu"),
		'mumayi' => qudaodata("mumayi"),
		'sougou' => qudaodata("sougou"),
		'tencent' => qudaodata("tencent"),
		'uc_yingyong' => qudaodata("uc_yingyong"),
		'wandoujia' => qudaodata("wandoujia"),
		),
	'ad_union' => array(
		'ad13' => qudaodata("ad13"),
		'ad17' => qudaodata("ad17"),
		'ad19' => qudaodata("ad19"),
		'ad27' => qudaodata("ad27"),
		'ad30' => qudaodata("ad30"),
		'ad32' => qudaodata("ad32"), 
		'ad33' => qudaodata("ad33"),
		'ad35' => qudaodata("ad35"),
		'ad37' => qudaodata("ad37"),
		'ad40' => qudaodata("ad40"),
		'ad41' => qudaodata("ad41"),
		'ad48' => qudaodata("ad48"),
		),
	'kuaiya' => qudaodata("kuaiya"),
	'web_union' => qudaodata("web_union"), 
	);

$in_sum = array_sum($in) + array_sum($in['lenovo']);
$out_sum = array_sum($out) + array_sum($out['appmarket']) + array_sum($out['ad_union']);

echo "
<script>
new Morris.Donut({
element: 'alldonut',
data: [
{label: '内部渠道', value: $in_sum},
{label: '外部渠道', value: $out_sum},
],
colors: ['#0b62a4', '#e5412d', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
resize: 'true'
});
</script>
";

$in_share_sum = $in['share'];
$in_wall_sum = $in['wall'];
$in_gameshare_sum = $in['gameshare'];
$in_guanwang_sum = $in['guanwang'];
$in_wechat_sum = $in['wechat'];
$in_lenovo_sum = $in['lenovo']['lenovo_share'];
echo "
<script>
new Morris.Donut({
element: 'insidedonut',
data: [
{label: '分享', value: $in_share_sum},
{label: '积分墙', value: $in_wall_sum},
{label: '游戏分享', value: $in_gameshare_sum},
{label: '官网', value: $in_guanwang_sum},
{label: '微信公众号', value: $in_wechat_sum},
{label: '联想定制版', value: $in_lenovo_sum},
],
resize: 'true'
});
</script>
";

$out_appmarket_sum = array_sum($out['appmarket']);
$out_ad_union_sum = array_sum($out['ad_union']);
$out_kuaiya_sum = $out['kuaiya'];
$out_web_union_sum = $out['web_union'];

echo "
<script>
new Morris.Donut({
element: 'outsidedonut',
data: [
{label: '应用市场', value: $out_appmarket_sum},
{label: '广告位', value: $out_ad_union_sum},
{label: '快牙', value: $out_kuaiya_sum},
{label: '网络推广、站长', value: $out_web_union_sum},
],
resize: 'true'
});
</script>
";
echo "
<div class='col-sm-6 col-md-6'>
<div class='panel panel-primary'>
  <div class='panel-heading'>
    <div style='float:left'><b>内部渠道详情</b></div>
    <div style='text-align:right'>昨日</div>
  </div>
    <table class='table table-hover table-bordered'>
      <thead>
		<tr>
		<th>渠道号</th>
		<th>备注</th>
		<th>数据</th>
		</tr>
      </thead>
      <tbody>
		<tr>
		<td>share</td>  
		<td>分享</td>
		<td>$in_share_sum</td>
		</tr>
		<tr>
		<td>wall</td>  
		<td>积分墙</td>
		<td>$in_wall_sum</td>
		</tr>
		<tr>
		<td>gameshare</td>  
		<td>游戏分享</td>
		<td>$in_gameshare_sum</td>
		</tr>
		<tr>
		<td>guanwang</td>  
		<td>官网</td>
		<td>$in_guanwang_sum</td>
		</tr>
		<tr>
		<td>wechat</td>  
		<td>微信公众号</td>
		<td>$in_wechat_sum</td>
		</tr>
		<tr>
		<td>lenovo_share</td>  
		<td>联想定制版分享着陆页下载的包</td>
		<td>$in_lenovo_sum</td>
		</tr>
      </tbody>
    </table>
</div>
</div>

<div class='col-sm-6 col-md-6'>
<div class='panel panel-danger'>
  <div class='panel-heading'>
    <div style='float:left'><b>外部渠道详情</b></div>
    <div style='text-align:right'>昨日</div>
  </div>
  	<table class='table table-hover table-bordered'>
      <thead>
		<tr>
		<th>渠道号</th>
		<th>备注</th>
		<th>数据</th>
		</tr>
      </thead>
      <tbody>
		<tr>
		<td>360</td>  
		<td>360手机助手</td>
		<td>" . $out['appmarket']['360'] . "</td>
		</tr>
		<tr>
		<td>ad07</td>  
		<td>百度广告</td>
		<td>" . $out['appmarket']['ad07'] . "</td>
		</tr>
		<tr>
		<td>appchina</td>  
		<td>应用汇</td>
		<td>" . $out['appmarket']['appchina'] . "</td>
		</tr>
		<tr>
		<td>baidu</td>  
		<td>百度手机助手</td>
		<td>" . $out['appmarket']['baidu'] . "</td>
		</tr>
		<tr>
		<td>feifanruanjian</td>  
		<td>安卓市场-非凡软件</td>
		<td>" . $out['appmarket']['feifanruanjian'] . "</td>
		</tr>
		<tr>
		<td>hiapk</td>  
		<td>安卓市场</td>
		<td>" . $out['appmarket']['hiapk'] . "</td>
		</tr>
		<tr>
		<td>lenovo_leshangdian</td>  
		<td>安卓应用市场——联想开发者</td>
		<td>" . $out['appmarket']['lenovo_leshangdian'] . "</td>
		</tr>
		<tr>
		<td>meizu</td>  
		<td>魅族</td>
		<td>" . $out['appmarket']['meizu'] . "</td>
		</tr>
		<tr>
		<td>mumayi</td>  
		<td>木蚂蚁</td>
		<td>" . $out['appmarket']['mumayi'] . "</td>
		</tr>
		<tr>
		<td>sougou</td>  
		<td>搜狗市场</td>
		<td>" . $out['appmarket']['sougou'] . "</td>
		</tr>
		<tr>
		<td>tencent</td>  
		<td>应用宝</td>
		<td>" . $out['appmarket']['tencent'] . "</td>
		</tr>
		<tr>
		<td>uc_yingyong</td>  
		<td>安卓市场—UC安卓应用商店</td>
		<td>" . $out['appmarket']['uc_yingyong'] . "</td>
		</tr>
		<tr>
		<td>wandoujia</td>  
		<td>豌豆荚</td>
		<td>" . $out['appmarket']['wandoujia'] . "</td>
		</tr>
		<tr>
		<td>ad13</td>  
		<td>觅途有方</td>
		<td>" . $out['ad_union']['ad13'] . "</td>
		</tr>
		<tr>
		<td>ad17</td>  
		<td>觅途有方</td>
		<td>" . $out['ad_union']['ad17'] . "</td>
		</tr>
		<tr>
		<td>ad19</td>  
		<td>九游换量</td>
		<td>" . $out['ad_union']['ad19'] . "</td>
		</tr>
		<tr>
		<td>ad27</td>  
		<td>掌聚外放</td>
		<td>" . $out['ad_union']['ad27'] . "</td>
		</tr>
		<tr>
		<td>ad30</td>  
		<td>觅途有方</td>
		<td>" . $out['ad_union']['ad30'] . "</td>
		</tr>
		<tr>
		<td>ad32</td>  
		<td>push</td>
		<td>" . $out['ad_union']['ad32'] . "</td>
		</tr>
		<tr>
		<td>ad33</td>  
		<td>精睿-推荐位 PUSH 市场</td>
		<td>" . $out['ad_union']['ad33'] . "</td>
		</tr>
		<tr>
		<td>ad35</td>  
		<td>觅途有方</td>
		<td>" . $out['ad_union']['ad35'] . "</td>
		</tr>
		<tr>
		<td>ad37</td>  
		<td>觅途有方</td>
		<td>" . $out['ad_union']['ad37'] . "</td>
		</tr>
		<tr>
		<td>ad40</td>  
		<td>觅途有方</td>
		<td>" . $out['ad_union']['ad40'] . "</td>
		</tr>
		<tr>
		<td>ad41</td>  
		<td>精睿</td>
		<td>" . $out['ad_union']['ad41'] . "</td>
		</tr>
		<tr>
		<td>ad48</td>  
		<td>智云天下</td>
		<td>" . $out['ad_union']['ad48'] . "</td>
		</tr>
		<tr>
		<td>kuaiya</td>  
		<td>快牙专版的渠道</td>
		<td>$out_kuaiya_sum</td>
		</tr>
		<tr>
		<td>web_union</td>  
		<td>网络推广、站长</td>
		<td>$out_web_union_sum</td>
		</tr>
      </tbody>
    </table>
</div>
</div>";
?>
