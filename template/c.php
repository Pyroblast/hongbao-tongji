<?php
$title1 = "log新增用户";
$title2 = "log活跃用户";
$title3 = "用户平均显示广告数";
$title4 = "CPA";
$sql1a = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='1' AND data_time='";
$sql1b = "' AND `type` ='user_add_uv'  AND channel='-' AND app_version='-'";
$sql2a = "SELECT SUM(`value`) FROM stat_zhuan_log_summary WHERE `interval`='1' AND data_time='";
$sql2b = "' AND `type` ='user_active_uv'  AND channel='-' AND app_version='-'";
$sql3a = "SELECT `value` FROM stat_zhuan_ad_avg WHERE data_time='";
$sql3b = "'";
$sql4a = "SELECT `value` FROM stat_zhuan_cpa WHERE `interval` ='4' AND data_time='";
$sql4b = "' AND `os_type` = 'android'  AND `channel_id` = '1'";
/*
echo "
<div class='form-group'>
	<label for='dtp_input2' class='col-md-2 control-label'>Date Picking</label>
	<div class='input-group date form_date col-md-5' data-date='' data-date-format='dd MM yyyy' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>
	    <input class='form-control' size='16' type='text' value='' readonly>
	    <span class='input-group-addon'><span class='glyphicon glyphicon-remove'></span></span>
	    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
	</div>
	<input type='hidden' id='dtp_input2' value='' /><br/>
</div>
 
<script type='text/javascript'>
    $('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>";
*/
echo "<div class='col-sm-12'>";
loghourChart($title1,$sql1a,$sql1b,"user_add_log_hour");
loghourChart($title2,$sql2a,$sql2b,"user_active_log_hour");
logAdAvgChart($title3,$sql3a,$sql3b,"user_ad_avg");
CpaChart($title4,$sql4a,$sql4b,"cpa");
echo "</div>";
?>
