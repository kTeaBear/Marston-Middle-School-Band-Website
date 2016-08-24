<!DOCTYPE HTML>
<head>

<title>MMS Music: Flute</title>

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
    <img src="../images/instruments/flute1.jpg">
    <img src="../images/instruments/flute2.jpg">
    <img src="../images/instruments/flute3.jpg">
    </div>
    <h2>Flute</h2>
	<p>Flutes are members of the woodwind family, dating back to when flutes were actually made of wood.
    Today, almost all flutes are made of metal, with very few still being made of wood. They are one of
    the oldest instruments, being part of many cultures in one form or another. It is known for its high
    range.
    </p>
	<p>Sound is accomplished by blowing a stream of air across a small hole in the top section of the
    flute. It is similar to blowing air across the top of a bottle to make sound.  Different notes are
    played by pressing your fingers on the correct keys as well as altering how much air is blown across
    the top hole.
    </p>
    <center><img id="skent" src="../images/instruments/flute-diagram.jpg"/></center>
    </section>
    
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>