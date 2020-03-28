<?php 
namespace Home;

$interval = 30;
$totals = count(HISTORY::execute("SELECT id FROM history", []));
$page = 1;
$pagestotale = ceil($totals / $interval);
if ($this->getId() != null && intval($this->getId()) > 0 && intval($this->getId()) <= $pagestotale) {
	$page = intval($this->getId());
}
$depart = ($page-1)*$interval;

$historiques = HISTORY::execute("SELECT * FROM history LIMIT $depart, $interval", []);

foreach ($historiques as $key => $historique) { ?>
	<tr>
		<td><i class="fa fa-clock-o fa-3x"></i></td>
		<td>
			<h4 class="mp0"><?= $historique->sentense  ?></h4>
			<small>Par <strong><?= $historique->auteur()  ?></strong> <i class="fa fa-clock-o"></i> <?= depuis($historique->created)  ?></small>
		</td>
		<td class="faq-item" style="width: 250px;">
			<span class="small font-bold">Robert Nowak</span>
			<div class="tag-list">
				<span class="tag-item"><?= $historique->record  ?></span> =>
				<span class="tag-item"><?= $historique->typeSave() ?></span>
			</div>
		</td>
		<td style="width: 100px;">
			<span class="small font-bold"><?= $historique->type() ?> </span><br/>
			<?= $historique->auteur() ?>
		</td>
	</tr>
<?php }

?>