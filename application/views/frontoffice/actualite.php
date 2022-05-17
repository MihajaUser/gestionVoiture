<div>
<h1>ACTUALITE</h1>
<?php
foreach ($informations as $information) {
?>
  <a href="<?php echo site_url() ?>/details-rechauffement-climatique/<?php echo $information['id'] . "/" . $information['titre'] . "/" . $information['description'] . "/" . $information['photo'] ?>">
    <div  style="margin-bottom: 100px ; width: 100%">
      <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col"><img src="<?php echo base_url() ?>/assets/photo/<?php echo $information['photo'] ?>" width="100%" height="100%" alt="logo background">
  </a>
  <div class="templatemo_service_title">
    <h1 style="color: black;font-weight: bold;"><?php echo $information['titre'] ?></h1>
  </div>
  <h2><?php echo $information['description'] ?></h2>
  </div>
  </div>
<?php
}
?>
</div>