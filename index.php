<html>
<head>
<title>Realtime fetching database using JSON</title>
</head>
<body>
<h4>Realtime Fetching data in database no Refresh page</h4>
<ul></ul>
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready( function() {
 done();
});
 
function done() {
	  setTimeout( function() { 
	  updates(); 
	  done();
	  }, 200);
}
 
function updates() {
	 $.getJSON("fetch.php", function(data) {
       $("ul").empty();
	   $.each(data.result, function(){
	    $("ul").append("<li>Nama: "+this['nama']+"</li><li>Kelas: "+this['kelas']+"</li><li>Jurusan: "+this['jurusan']+"</li><br />");
                            
	   });
 });
}
</script>
</body>
</html>