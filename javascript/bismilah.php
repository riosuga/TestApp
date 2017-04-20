<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<!-- <script>

		$.ajax({
        url:"http://10.102.103.182/bissmillah/test.php",
        type : "POST",
        dataType : "JSON",
        data : {car : "1", id : "2"},
        success: function(data){
        	alert("yey"+data.success);
        },
        error : function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
        }
    });
	</script> -->
    <?php 
    $data = array("kendaraan => sedan","merk => mazda");
    echo json_encode($data);
    ?>
</body>
</html>