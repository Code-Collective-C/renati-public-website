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
                    <h1>The Team</h1>
                    <h3>Renati Group Directors</h3>
                    <strong style="color:#005BAA;">Stevie Ferreira (Managing Director)</strong><br />
                    <p>A  qualified accountant, Stevie left the profession in 1994 when he moved to New  Zealand. There he worked as an independent business consultant until he took up  the position of Business Development Manager for Fleetwood Electronics Ltd,  responsible for the company&rsquo;s international business development and partner  relationships.</p>
                  <p>Stevie  returned to South Africa at the end of 2002 to promote and establish  Fleetwood&rsquo;s business 
                    in the  South African market. He resigned from the company in 2005 and started  TruckFuelNet, an 
                    on-road  refuelling service, and Code Collective, a software development  company. 
                    Stevie is currently the Managing Director of TruckFuelNet  and Renati Group Pty Ltd, responsible for the strategic business development  and expansion of the Group.</p><br />
                    <strong style="color:#005BAA;">Neil de Kock (Director)</strong><br />
                    <p>Formerly a successful farmer, Neil sold his farming concerns in 2005. In 2006, he formed Nito Energy Pty Ltd, a petroleum wholesale operation, where he is currently Managing Director.</p>
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