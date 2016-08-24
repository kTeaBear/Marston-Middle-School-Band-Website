<!DOCTYPE HTML>
<head>

<title>MMS Music: Snare Drum</title>

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
    <img src="../images/instruments/snare3.jpg">
    <img src="../images/instruments/snare2.jpg">
    <img src="../images/instruments/snare1.jpg">

    </div>
    <h2>Snare Drum</h2>
    <p>The snare drum or 'side drum' is a part of the drum set often played by itself in marching bands, drumlines, orchestras, and concert bands. It originated as a military drum, but is similar to the Tabor, which first appeared in the 1300's.
    </p>
	<p>The snare drum is played by striking the drum or rim with a stick or beater. Most snare drums are made out of wood, using a plastic skin.
	</p>
    <center><img id="skent" src="../images/instruments/snare-diagram.jpg"/></center>
    </section>
        
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>