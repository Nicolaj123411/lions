			<div id="table">
				<div class="flex table-header">
					<a href="new-news.php">Opret nyhed</a>
				<h1>Rediger nyhed indhold</h1>
				</div>

				<div class="table-row">
					<ul class="flex">
						<li><h1>Overskrift</h1></li>
						<li style="flex: 4;">
							<h1>Beskrivelse</h1>
						</li>
						<li>
							<h1>Billede</h1>
						</li>
						<li>
							<h1>Muligheder</h1>
						</li>
					</ul>	
				</div>

<?php

$query = $handler->query("SELECT * FROM news");
if($query->rowCount()){
	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
		?>
			<div class="table-row">
				<form id="<?php echo $r->id; ?>" class="row-edit" action="edit-news-controller.php" method="get">
					<input  type="hidden" name="id" value="<?php echo $r->id; ?>">
				<ul class="flex">
					<li><input name="headline" type="text" value="<?php echo $r->title; ?>"></li>
					<li style="flex: 4;"><textarea id="<?php echo $r->id; ?>" name="desc" form="<?php echo $r->id; ?>"><?php echo $r->content; ?></textarea></li>
					<li>
						<a href="?admin_page=edit-image&page=news&id=<?php echo$r->id; ?>"><img src="../img/<?php echo $r->img; ?>" alt="" height="100" width="100""></a>
					</li>
					<li>
						<a class="red-bg" href="delete-news.php?news-id= <?php echo $r->id; ?>">SLET</a>
						<a class="green-bg" href="#">OPDATER</a>
						<input type="submit" value="Opdater info">
						<a class="green-bg" href="?admin_page=edit-image&page=news&id=<?php echo $r->id; ?>">SKIFT BILLEDE</a>
					</li>
				</ul>	
			</form>
			</div>
		<?php
	}
}else{
		echo "Ingen resultater";
	}
	?>
</div>	
