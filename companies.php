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
        </div>


        <div class="row">
            <div class="container">
                <div class="col-md-7 col-xs-12">
                    <h1>Group companies</h1>
                    <h3>The  Group comprises the following companies:</h3>
                    <p><strong style="color: #F57321">TruckFuelNet</strong>: Specialising in providing a  complete <strong>on-road refuelling solution</strong> driven by <strong>technology</strong>, giving  customers the ability to not only refuel at <strong>discounted</strong> prices but manage  their fuel <strong>expenditure</strong> on a <strong>real-time</strong> basis through a <strong>comprehensive</strong> management system.</p>
                    <p><strong>Bauzer</strong>:  Bauzer uses <strong>technology</strong> and <strong>innovative</strong> methods to service the <strong>bulk  fuel-trading</strong> market. With combined <strong>management</strong> experience of over <strong>70  years</strong> in the industry, we understand the <strong>complexities</strong> and <strong>pitfalls</strong> of the <strong>fuel trading</strong> market and have the <strong>solutions</strong> our customers  need.</p>
                    <p><strong style="color: #005BAA">Code Collective</strong>: Code Collective provide, build and  service <strong>custom-designed software solutions</strong> to be the <strong>ideal medium</strong> to achieve your core <strong>strategies</strong> and <strong>objectives</strong>. Our focus is on  growth, efficiency, simplicity and accuracy. </p>
                    <p><strong style="color: #B2C735">Nito Energy</strong>:  Focusing on the <strong>wholesale fuel trade</strong>, Nito has proven itself in the  market to be a <strong>trustworthy</strong> and <strong>competitive</strong> independent fuel  wholesaler.</p>

              </div>
            </div>
        </div>
            <p class="clearfix"></p>
        
        
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