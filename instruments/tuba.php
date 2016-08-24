<!DOCTYPE HTML>
<head>

<title>MMS Music: Tuba</title>

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
    <img src="../images/instruments/tuba1.jpg">
    </div>
    <h2>Tuba</h2>
	<p>The tuba is the largest brass instrument taught in schools. As the largest, it plays the deepest notes.
    </p>
	<p>The tuba is played by blowing into the instrument while buzzing your lips together. Varying the speed of air and pressing the valves down will differ the notes and volume. It has the largest mouthpiece in the brass family.
    </p>
	<p>Due to its large size, the tuba is not usually intended for younger players. Students who play tuba usually start out on another brass instrument, moving to tuba when they are able.
	</p>
    <center><img id="skent" src="../images/instruments/tuba-diagram.jpg"/></center>
    </section>
        
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>