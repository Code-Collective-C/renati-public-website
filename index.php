<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Renati Group</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/renati.css">

</head>

<body>
    <?php include('inc/nav.htm'); ?>
    <div class="container">

        <div class="banner nomargin">
            <div class="watermark"><img class="swirl" src="images/watermark.png" alt="" /></div>
            <img class="img-responsive" src="images/banner.jpg" alt="" />
            <div class="mission ">AS A GROUP RENATI BELIEVES IN BEING PROACTIVE AND INNOVATIVE IN THE WAY IT CONDUCTS BUSINESS.</div>
        </div>


        <div class="row">
            <div class="container">
                <div class="col-md-7 col-xs-12">
                    <h1>Welcome</h1>
                    <p>Leaders of <strong>innovation</strong> in the petroleum industry, the Renati Group offers a <strong>wide range</strong> of products to accommodate an <strong>array of needs</strong>. From <strong>on-road refuelling</strong> to <strong>wholesale fuel distribution</strong> we have worked to establish <strong>dynamic</strong>, <strong>top-quality</strong> offerings through our expert <strong>market knowledge</strong> and <strong>business strategy</strong>. </p>
                </div>
            </div>
        </div>

        <div class="row about">
            <div class="container">
                <div class="blockholder">
                    <div class="col-md-4 abox">
                        <div class="aintro"><img class="ico pull-left" src="images/about.png" alt="" />About us</div>
                        <div class="ainfo"> The Renati Group was established in <strong>2014</strong> with the intention of making a <strong>difference</strong> in the petroleum industry by introducing a more <strong>personal</strong> and <strong>technology-driven</strong> way of doing business through a range of <strong>unique</strong> product offerings.<a href="about.php"><img class="pull-right info" src="images/more.png" alt="more info" /></a>
                        </div>
                    </div>
                    <div class="col-md-4 abox">
                        <div class="aintro"><img class="ico pull-left" src="images/group.png" alt="" />Group companies</div>
                        <div class="ainfo"> At Renati Group we believe in the famous adage <strong>&lsquo;action is the foundational key to all success&rsquo;, </strong>and as such are always looking to further <strong>improve</strong> and <strong>innovate</strong> our services to provide <strong>quality</strong> experiences our clients will remember.<a href="companies.php"><img class="pull-right info" src="images/more.png" alt="more info" /></a>
                        </div>
                    </div>
                    <div class="col-md-4 abox">
                        <div class="aintro"><img class="ico pull-left" src="images/team.png" alt="" />Our team</div>
                        <div class="ainfo"> You&rsquo;re only as good as the <strong>sum of your parts</strong> and at Renati Group we&rsquo;re proud to have a world-class <strong>team of professionals </strong>on our side, continually applying their business savvy and industry <strong>know-how</strong> to the <strong>benefit</strong> of our clients.<a href="team.php"><img class="pull-right info" src="images/more.png" alt="more info" /></a>
                        </div>
                    </div>
                    <span class="clearfix"></span>
                </div>
            </div>

        </div>
        <div class="row companies">
            <?php include('inc/companies.htm'); ?>
        </div>
        <div class="row footer">
            <div class="container">
                <?php include('inc/footer.htm'); ?>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script>
	$(document).ready(function () {
		var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('activea');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('activea');
    });
</script>
</body>

</html>