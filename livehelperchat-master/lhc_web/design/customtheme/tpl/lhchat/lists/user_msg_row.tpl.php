<?php if ($msg['user_id'] > -1 || $msg['user_id'] == -2) : ?>
	<?php if ($msg['user_id'] == 0) { ?>
	        <div class="message-row response" id="msg-<?php echo $msg['id']?>" data-op-id="<?php echo $msg['user_id']?>">
	        	<!-- <div class="msg-date"><?php if (date('Ymd') == date('Ymd',$msg['time'])) {	echo  date(erLhcoreClassModule::$dateHourFormat,$msg['time']);} else { echo date(erLhcoreClassModule::$dateDateHourFormat,$msg['time']);}; ?></div> -->
	        	<!-- <span class="usr-tit<?php echo $msg['user_id'] == 0 ? ' vis-tit' : ' op-tit'?>">
	        		<?php echo htmlspecialchars($chat->nick)?>
	        	</span> -->
	        	<div class="user-avatar">
	        		<img src="">
	        	</div>
	        	<div class="user-message">
	        		<?php echo erLhcoreClassBBCode::make_clickable(htmlspecialchars($msg['msg']))?>
	        	</div>
	        	<div class="clear-both"></div>	
        	</div>
	 <?php } else { ?>
	        <div class="message-row message-admin<?php (isset($lastOperatorChanged) && $lastOperatorChanged == true ? print ' operator-changes' : '') ?>" id="msg-<?php echo $msg['id']?>" data-op-id="<?php echo $msg['user_id']?>">
	        	<!-- <div class="msg-date"><?php if (date('Ymd') == date('Ymd',$msg['time'])) { echo  date(erLhcoreClassModule::$dateHourFormat,$msg['time']);} else {	echo date(erLhcoreClassModule::$dateDateHourFormat,$msg['time']);}; ?></div> -->
	        	<!-- <span class="usr-tit<?php echo $msg['user_id'] == 0 ? ' vis-tit' : ' op-tit'?>"><?php echo htmlspecialchars($msg['name_support'])?></span> -->

	        	<div class="admin-avatar">
	        		<img src="">
	        	</div>
	        	<div class="admin-message">
	        		<?php echo erLhcoreClassBBCode::make_clickable(htmlspecialchars($msg['msg']))?>
	        	</div>
	        	<div class="clear-both"></div>	
	        </div>
	<?php } ?>
<?php endif;?>