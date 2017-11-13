			<div id="table">
				<div class="flex table-header">
					<h1>Vælg billede</h1>
				</div>
			</div>	
<div class="image-list flex">
<?php
	$event_billeder = listFolderFiles('../img/event_billeder');
foreach ($event_billeder as $event_billede) {
	?><div><a href="?admin_page=edit-image-controller&page= <?php echo $_GET["page"]; ?>&new_image=event_billeder/<?php echo $event_billede; ?>&id=<?php echo $_GET["id"]; ?>"><img src="../img/event_billeder/<?php echo $event_billede; ?>" alt="" height="150" width="250"></a></div> <?php ;
}
?>
					


<?php
	$header_billeder = listFolderFiles('../img/header_billeder');
foreach ($header_billeder as $header_billede) {
	?><div><a href="?admin_page=edit-image-controller&page= <?php echo $_GET["page"]; ?>&new_image=header_billeder/<?php echo $header_billede; ?>&id=<?php echo $_GET["id"]; ?>"><img src="../img/header_billeder/<?php echo $header_billede; ?>" alt="" height="150" width="250"></a></div> <?php ;
}
?>


<?php
	$nyheder_billeder = listFolderFiles('../img/nyheder_billeder');
foreach ($nyheder_billeder as $nyheder_billede) {
	?><div><a href="?admin_page=edit-image-controller&page= <?php echo $_GET["page"]; ?>&new_image=nyheder_billeder/<?php echo $nyheder_billede; ?>&id=<?php echo $_GET["id"]; ?>"><img src="../img/nyheder_billeder/<?php echo $nyheder_billede; ?>" alt="" height="150" width="250"></a></div> <?php ;
}
?>
</div>	



			
