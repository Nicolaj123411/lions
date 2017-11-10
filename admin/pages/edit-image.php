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
	echo '<div><a href=""><img src="../img/header_billeder/' . $header_billede . ' " alt="" height="150" width="250"></a></div>';
}
?>
					



						
<?php
	$nyheder_billeder = listFolderFiles('../img/nyheder_billeder');
foreach ($nyheder_billeder as $nyheder_billede) {
	echo '<div><a href="#"><img src="../img/nyheder_billeder/' . $nyheder_billede . ' " alt="" height="150" width="250"></a></div>';
}
?>
				</div>	



			
