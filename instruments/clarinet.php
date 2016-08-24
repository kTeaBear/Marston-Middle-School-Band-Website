<!DOCTYPE HTML>
<head>

<title>MMS Music: Clarinet</title>
<br>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
      $("#3").addClass('current');
  });
});
</script>

</head>

<body>

    <?php include '../includes/header.php'; ?>

    <section id="class-section">
    <div id="img-container">
    <img src="../images/instruments/clarinet1.jpg">
    <img src="../images/instruments/clarinet2.jpg">
    <img src="../images/instruments/clarinet3.jpg">
    </div>
    <h2>Clarinet</h2>
	<p>Clarinets, or 'little trumpets' in Italian, are members of the woodwind family, with intermediate
    and professional clarinets being made of wood.  Student clarinets are generally made of resin or
    plastic. The clarinet was popularized by Mozart, but picked up immensely during the swing era in the
    1940's.
    </p>
	<p>The sound is created by blowing air into a small mouthpiece, the underside of which contains a
    thin piece of bamboo called a reed.  As you blow air into the mouthpiece, the reed vibrate back and
    forth, creating sound that travels through the clarinet. Different notes are played by pressing your
    fingers to the correct keys.
    </p>
	<p>It is common practice for clarinet players to keep extra reeds, as they wear out after a few
    weeks- sooner if not properly cared for.
    </p>
    <center><img id="skent" src="../images/instruments/clarinet-diagram.jpg"/></center>

    </section>
    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>