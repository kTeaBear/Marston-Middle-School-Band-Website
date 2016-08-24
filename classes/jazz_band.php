<!DOCTYPE HTML>
<head>

<title>MMS Music: Jazz Band</title>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
      $("#2").addClass('current');
  });
});
</script>

</head>

<body>

    <?php include '../includes/header.php'; ?>

    <section id="class-section">
    <h2>Jazz Band</h2>
    <p>Jazz Band is Mr. Kent's advisory class. Students who show a strong desire to play music are invited by Mr. Kent to join Jazz Band. Jazz Band students must currently be enrolled in a Band class. The group performs several concerts per year. If you have further questions, please contact Mr. Kent.
    </p>
    <p>Instruments taught in this class may include:<br>
    <center><a href="../instruments/clarinet.php">Clarinet</a><br>
    <a href="../instruments/flute.php">Flute</a><br>
    <a href="../instruments/saxophone.php">Saxophone</a><br>
    <a href="../instruments/trombone.php">Trombone</a><br>
    <a href="../instruments/trumpet.php">Trumpet</a><br>
    <a href="../instruments/tuba.php">Tuba</a><br>
    <a href="../instruments/bass.php">Bass Guitar</a><br>
    <a href="../instruments/concert-percussion.php">Concert Percussion</a><br>
    <a href="../instruments/drumset.php">Drum Set</a><br>
    <a href="../instruments/snare.php">Snare Drum</a><br></center>
    </p>
    </section>
    
	<?php include '../includes/class-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>