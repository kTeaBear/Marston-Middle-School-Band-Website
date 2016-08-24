<!DOCTYPE HTML>
<head>

<title>MMS Music: Bass Guitar</title>

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
    <img src="../images/instruments/bass1.jpg">
    <img src="../images/instruments/bass2.jpg">
    </div>
    <h2>Bass Guitar</h2>
	<p>The bass guitar, or electric bass, is a string instrument with exactly the same pitch
    as the upright bass.  They started showing up in the 1930's, but did not gain popularity
    until the 1950's when Fender started making them.
    </p>
    <p>Sound is created by plucking the strings with right-hand fingers, with the sound going
    through an electronic amplifier. The bass guitar contain a series of 'frets' on the
    fingerboard to help guide the fingers to the correct locations to play the proper notes.
	</p>
    <center><img id="skent" src="../images/instruments/bass-diagram.jpg"/></center>
    <h3>Resources</h3>
    <center><a href="http://www.studybass.com/study-guide/" target="_blank">Fundamental Bass Lessons</a><br>
    <a href="http://www.dummies.com/how-to/content/bass-guitar-exercises-for-dummies-cheat-sheet.html" target="_blank">Exercise Sheet</a><br>
    <a href="http://www.bigbasstabs.com/" target="_blank">Tabs: All Difficulties</a></center><br>
    </section>
    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>