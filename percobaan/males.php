<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table style="width:100%">
<?php for($i=2; $i<= 5917;$i++){ ?>
  <tr>
    <td><?php echo '=MATCH(AH'.$i.',A2:A65000,0)'; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>