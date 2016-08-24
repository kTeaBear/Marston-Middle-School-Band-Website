<!DOCTYPE HTML>
<head>

<title>MMS Music: Drum Set</title>

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
    <img src="../images/instruments/drumset1.jpg">
    <img src="../images/instruments/drumset2.jpg">
    <img src="../images/instruments/drumset3.png">
    </div>
    <h2>Drum Set</h2>
    <p>Drum set is commonly found in jazz band and rock bands, and occasionally in a concert
    band setting (depending on the music). 
    </p>
	<p>Drum set is a setup of multiple types of drums and cymbals. A typical drum set
    arrangement includes: snare drum, kick drum (a floor bass drum with foot/bass drum pedal),
    hi-hat, approximately 3 different cymbals(ranging from small to large), and tom-toms
    (attached to the bass drum). The drum set is played while seated and requires coordination
    of both arms and legs.
	</p>
    <center><img id="skent" src="../images/instruments/drumset-diagram.png"/></center>
    </section>

    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>