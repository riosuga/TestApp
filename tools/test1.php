<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="">
<head>
<script type="text/javascript" src="D:\Web\htdocs\Archive\assets\jquery\jquery-2.1.4.min.js"></script>
	<title></title>
</head>
<body>

</body>


<script type="text/javascript">
 function lalala(){
  $.ajax({
    type:'GET',
    url: 'http://10.102.103.66:13130/',
    data : 'juandi',
    success: function(data){
      document.write(data);
    },
    error: function(data){
    	alert('gagal konek');

    }
  });
 }

 lalala();

 // $.post('http://10.102.103.66:13130',{nama:'juandi',pekerjaan :'cs'});
 
</script>
</html>