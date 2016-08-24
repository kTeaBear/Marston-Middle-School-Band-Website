<!DOCTYPE HTML>
<head>

<title>MMS Music: Violin</title>

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

    <section>
    <div id="img-container">
    <img src="../images/instruments/violin1.jpg">
    <img src="../images/instruments/violin2.jpg">
    </div>
    <h2>Violin</h2>
	<p>The violin is the highest-pitched member of the string family. The body is made of wood with four metal strings.
    </p>
	<p>Violins come in all different sizes depending on the length of the player's arm.  It is played using a bow that is held in the right hand, while the violin is held the in the left.  The bow is a wooden stick connected to a strand of horse hair. The hair is moved across the strings, causing vibrations that create sound. Different notes are played by using different strings, pressed down by left-hand fingers. Strings may also be plucked using the right hand.
    </p>
	<center><img id="skent" src="../images/instruments/violin-diagram.png"/></center>
    </section>
    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>