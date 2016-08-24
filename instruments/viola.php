<!DOCTYPE HTML>
<head>

<title>MMS Music: Viola</title>

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
    <img src="../images/instruments/viola1.jpg">
    <img src="../images/instruments/viola2.jpg">
    <img src="../images/instruments/viola3.jpg">
    </div>
    <h2>Viola</h2>
	<p>>The viola is only slightly larger than a violin, but the size difference allows it to player lower-pitched notes.
    </p>
	<p>The viola is played the same way as a violin, by moving the bow across the strings while the left-hand fingers are pressed on the strings to make different notes. The strings may also be plucked to create sound. Also similar to the violin, size depends on the length of the player's arm.
    </p>
	<p>Most viola players start out on violin, switching to viola after a year or two of experience. It may be too large for smaller students.
	</p>
    <center><img id="skent" src="../images/instruments/viola-diagram.jpg"/></center>
    </section>
        
    <?php include '../includes/instrument-side.php'; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</HTML>