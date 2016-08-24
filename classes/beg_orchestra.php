<!DOCTYPE HTML>
<head>

<title>MMS Music: Beginning Orchestra</title>

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
    <h2>Beginning Orchestra</h2>
    <p>Beginning Orchestra is open to all students who desire to learn a stringed instrument. The class includes students who wish to expand their musical skills. Orchestra starts with very basic instrumental instruction and becomes more advanced as the year progresses. Individual technique is emphasized as is playing together in a large group. Orchestra performs several concerts per year. If you have further questions, please contact Mr. Kent.
    </p>
    <p>A limited supply of instruments are available for Marston students to borrow for the years. Students are also encouraged to acquire an instrument as early as possible from local music stores.
    </p>
    <p>Instruments taught in this class include:<br>
    <center><a href="../instruments/cello.php">Cello</a><br>
    <a href="../instruments/uprightbass.php">Upright Bass</a><br>
    <a href="../instruments/viola.php">Viola</a><br>
    <a href="../instruments/violin.php">Violin</a><br></center>
    </p>
    </section>

	<?php include '../includes/class-side.php'; ?>


    <?php include '../includes/footer.php'; ?>
</body>

</HTML>