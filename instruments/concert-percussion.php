<!DOCTYPE HTML>
<head>

<title>MMS Music: Concert Percussion</title>

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
    <img src="../images/instruments/percussion1.jpg">
    <img src="../images/instruments/percussion2.jpg">
    <img src="../images/instruments/percussion3.jpg">
    </div>
    <h2>Concert Percussion</h2>
    <p>In comparison to other instruments, concert percussion is the most recent addition to the band
    setting.
    </p>
	<p>There are many different types of drums and auxiliary and mallet instruments within the percussion 	family. The main types of drums that are usually found in concert percussion are: snare drum, bass
    drum, tom-toms, and timpani. Auxiliary percussion includes, but is not limited to: crash cymbals,
    suspended cymbal, triangle, tambourine, and shakers.
    </p>
	<p>There are also different types of mallet instruments in the percussion family, such as the
    xylophone, marimba, and glockenspiel (also known as bells). Mallet instruments are set up like a
    piano keyboard and require two or more mallets to play.
	</p>
    <center><img id="skent" src="../images/instruments/percussion-diagram.png"/></center>
    <h3>Resources</h3>
    <center><a href="http://zildjian.com/education/lessons/concert-percussion" target="_blank">Concert Percussion Lessons: Zildjian</a></center><br>
    </section>
    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>