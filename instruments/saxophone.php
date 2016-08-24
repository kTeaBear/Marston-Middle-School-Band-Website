<!DOCTYPE HTML>
<head>

<title>MMS Music: Saxophone</title>

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
    <img src="../images/instruments/saxophone1.jpg">
    <img src="../images/instruments/saxophone2.jpg">
    </div>
    <h2>Saxophone</h2>
	<p>The saxophone is a member of the woodwind family, although 'wood' is not quite correct,
    as saxophones are made out of brass. It was invented in 1841 as a cross between brass and
    woodwind instruments, designed initially for military bands. It gained popularity during
    the development of early swing and jazz music.
    </p>
	<p>Similar to the clarinet, sound is made by blowing into a mouthpiece, the underside
    containing a reed. The vibration of the reed creates the sound that travels through the
    instrument. Different notes are played by pressing your fingers to the correct keys. The
    note fingerings on saxophone are the same as they are on flute, even though playing is
    vastly different.
    </p>
	<p>It is common practice to keep extra reeds on hand, as they wear out after a few weeks-
    sooner if not properly cared for.
    </p>
    <center><img id="skent" src="../images/instruments/saxophone-diagram.jpg"/></center>
    </section>

	<?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>