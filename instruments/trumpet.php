<!DOCTYPE HTML>
<head>

<title>MMS Music: Trumpet</title>

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
    <img src="../images/instruments/trumpet1.jpg">
    <img src="../images/instruments/trumpet2.jpg">
    </div>
    <h2>Trumpet</h2>
	<p>The trumpet is a brass instrument that makes a clear, loud sound. It is the highest pitched instrument in the brass family. The earliest known trumpets date all the way back to 1500BC, found in King Tut's grave, Scandinavia, and China.
    </p>
	<p>The trumpet is played by pressing your lips to the mouthpiece and blowing into the instrument while buzzing your lips together. Varying the speed of air and pressing down on the three valves determine the note played.
    </p> 

    <center><img id="skent" src="../images/instruments/trumpet-diagram.jpg"/></center>
    </section>
	    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>