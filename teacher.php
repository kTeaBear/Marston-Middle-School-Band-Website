<!DOCTYPE HTML>
<head>

<title>MMS Music: Scott Kent</title>

</head>

<body>

    <?php include './includes/header.php'; ?>
    
<aside id="teacher-aside">
    <br>
    <center><img id="skent2" src="../images/skent2.jpg"/>
    <h3>Contact Information</h3>
    skent1@sandi.net
    <br>
    858-273-2030 Ext. 4403
    <br><br>
	<img id="skent2" src="../images/skent1.jpg"/></center>
</aside>    
    
<section id="teacher-content">
	<br>
    <div id="scroller">
    <div class="innerScrollArea">
        <ul>
            <!-- Define photos here -->
             <li><img src="../images/slider/dog1.jpg" width="215" height="200" /></li>
             <li><img src="../images/slider/dog2.jpg" width="180" height="200" /></li>
             <li><img src="../images/slider/dog3.jpg" width="273" height="200" /></li>
             <li><img src="../images/slider/dog4.jpg" width="267" height="200" /></li>
             <li><img src="../images/slider/dog5.jpg" width="267" height="200" /></li>
             <li><img src="../images/slider/dog6.jpg" width="200" height="200" /></li>
             <li><img src="../images/slider/dog7.jpg" width="267" height="200" /></li>
             <li><img src="../images/slider/dog8.jpg" width="267" height="200" /></li>
             <li><img src="../images/slider/dog9.jpg" width="268" height="200" /></li>
             <li><img src="../images/slider/dog10.jpg" width="268" height="200" /></li>
             <li><img src="../images/slider/dog11.jpg" width="256" height="200" /></li>
             <li><img src="../images/slider/dog12.jpg" width="268" height="200" /></li>
             <li><img src="../images/slider/dog13.jpg" width="251" height="200" /></li>
             <li><img src="../images/slider/dog14.jpg" width="267" height="200" /></li>
        </ul>
	</div>
	</div>
    <h2> Mr. Scott Kent</h2>
    <p>Mr. Kent graduated from Bunnell High School in Stratford, Connecticut. He has earned an Associate's Degree in Music from Housatonic Community College, a Bachelor's degree from Berklee College of Music and a Masters degree in Jazz Studies from San Diego State University. He was a veteran of stage and studio prior to teaching at Marston. 
    </p>
    <p>Mr. Kent finds teaching at Marston a challenging and incredibly rewarding experience. His enthusiasm is well expressed when he says "Every year that goes by, I enjoy teaching more. I can't think of anything I'd rather do than share the joy of playing music." 
    </p>
    <p>In his free time, Mr. Kent loves to surf, hike, play and record music, and spend time with his dogs, Sabachka and Wishi.  
    </p> <br><br>


	<div id="img-container">
    <img src="../images/skent3.jpg">
    <img src="../images/skent5.jpg">
    <img src="../images/skent4.jpg">
    </div>
</section>

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var scroller = $('#scroller div.innerScrollArea');
        var scrollerContent = scroller.children('ul');
        scrollerContent.children().clone().appendTo(scrollerContent);
        var curX = 0;
        scrollerContent.children().each(function(){
            var $this = $(this);
            $this.css('left', curX);
            curX += $this.outerWidth(true);
        });
        var fullW = curX / 2;
        var viewportW = scroller.width();

        // Scrolling speed management
        var controller = {curSpeed:0, fullSpeed:2};
        var $controller = $(controller);
        var tweenToNewSpeed = function(newSpeed, duration)
        {
            if (duration === undefined)
                duration = 600;
            $controller.stop(true).animate({curSpeed:newSpeed}, duration);
        };

        // Pause on hover
        scroller.hover(function(){
            tweenToNewSpeed(0);
        }, function(){
            tweenToNewSpeed(controller.fullSpeed);
        });

        // Scrolling management; start the automatical scrolling
        var doScroll = function()
        {
            var curX = scroller.scrollLeft();
            var newX = curX + controller.curSpeed;
            if (newX > fullW*2 - viewportW)
                newX -= fullW;
            scroller.scrollLeft(newX);
        };
        setInterval(doScroll, 20);
        tweenToNewSpeed(controller.fullSpeed);
    });
</script>

    <?php include './includes/footer.php'; ?>
</body>

</HTML>