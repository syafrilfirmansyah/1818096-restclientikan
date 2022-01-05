<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('asset/css/materialize.min.css') ?>" media="screen,projection" />
    <title>RESTFUL CLIENT Ikan</title>
</head>
<body>
<?php echo form_open('Ikan/edit');?>
<?php echo form_hidden('id',$dataIkan->id);?>

<table>
    <tr><td>id</td><td><?php echo form_input('id',$dataIkan->id,"disabled");?></td></tr>
    <tr><td>nama</td><td><?php echo form_input('merek',$dataIkan->nama);?></td></tr>
    <tr><td>jenis</td><td><?php echo form_input('jenis',$dataIkan->jenis);?></td></tr>

    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Ikan','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
    <script type="text/javascript" src="<?= base_url('asset/js/materialize.min.js') ?>"></script>
</body>
</html>