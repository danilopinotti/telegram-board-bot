<?php
	include "configs/application.php";
	include "BoardBot.php";
	echo BoardBot::haveUpdates($telegramBotConfig["token"]);
?>