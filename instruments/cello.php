<!DOCTYPE HTML>
<head>

<title>MMS Music: Cello</title>

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
    <img src="../images/instruments/cello1.jpg">
    <img src="../images/instruments/cello2.jpg">
    <img src="../images/instruments/cello3.jpg">
    </div>
    <h2>Cello</h2>
	<p>The cello, or the 'violincello', is a larger member of the string family. It plays
    lower notes than the violin and viola, but is slightly higher than the upright bass.
    </p>
    <p>While the cello stands on a floor peg, it is played in the same manner as the violin.
    The bow is moved across the strings and the left-hand fingers are pressed on the strings
    to make different notes.
	</p>
    <center><img id="skent" src="../images/instruments/cello-diagram.jpg"/></center>
    <h3>Resources</h3>
    <center><a href="https://www.youtube.com/watch?v=W_USdeYQR7c" target="_blank">Beginner Tips Video: Virtual Sheet Music Productions</a><br>
    <a href="http://www.celloonline.com/cellobasics.htm" target="_blank">Basic Cello Reference Guide</a>
    </center><br>
    </section>
    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>