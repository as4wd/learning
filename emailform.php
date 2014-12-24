<html>	
<body>
<form action="Sendmail3.php" method="post">
 	
 	Benim Adim: <br/>
 	<input type="text" name="myname" /><br/>

 	Benim Email Adresim:<br/>
 	<input type="text" name="myemail" /><br/>

 	Gonderilecek Ad Soyad: <br/>
 	<input type="text" name="name" /><br/>
 	
 	Gonderilecek Email Adresi: <br/>
 	<input type="text" name="email" /><br/>
 	 	
 	Konu: <br/>
 	<input type="text" name="subject" /><br/>

 	Mesaj: <br/>
	<textarea rows="4" cols="50" name="emailcontent"></textarea><br/>
	
	<input type="checkbox" name="metoo" value="1" checked /> Formun bir kopyasini bana da gonder<br/>
	
	<input type="submit" value="Formu gonder" />
</form>
</body>
</html>