<!DOCTYPE html>
<html>
<head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- <script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").load("query.php");
    });
});
</script>
</head>
<body> -->

<!-- <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button> -->

<form method="post" id="postForm" name="postForm">
	<input type="text" name="judul" id="judul"><br />
    <textarea name="isi" id="isi"></textarea><br />
    <input type="button" name="formPost" id="formPost" value="send">
</form>
<!-- include Google hosted jQuery Library -->
      <script src="jquery-3.1.1.min.js"></script>

      <!-- Start jQuery code -->
      <script type="text/javascript">
      $(document).ready(function() {
      //our jquery code goes here
      $("#formPost").click(function() {
                var judul = $("#judul").val();
                var isi = $("#isi").val();
                if (judul == '' || isi == '') {
                alert("Insertion Failed Some Fields are Blank....!!");
                } else {
                // Returns successful data submission message when the entered information is stored in database.
                $.post("wsdl.php", {
                judul1: judul,
                isi1: isi,
                }, function(data) {
                alert(data);
                 // To reset form fields
                });
                }
                });
      });
</script>

</body>
</html>