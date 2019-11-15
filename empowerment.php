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
                <div class="col-md-7">
                  <h1>Empowerment</h1>
                    <p>
                  At the  Renati Group, we believe a company can only be as <strong>strong</strong> and successful  as its <strong>employees</strong>. Through their <strong>commitment</strong> and dedication,  business <strong>excellence</strong> is maintained and company <strong>growth</strong> can be  achieved.</p>
                    <p>Since  inception, <strong>group policy</strong> has been that <strong>all</strong> employees, regardless  of <strong>job title</strong> or <strong>position</strong>, share in the monthly <strong>profits</strong> of  their respective company. The <strong>Zivuse Trust </strong>was established to provide <strong>employees</strong> of the Renati Group and its subsidiaries with an <strong>investment vehicle</strong> to  further share in the Group&rsquo;s <strong>income</strong> and <strong>capital growth</strong>. It is the  Trust&rsquo;s <strong>mandate</strong> to ensure all employees make <strong>adequate</strong> provision  for retirement and have the means to provide an <strong>education</strong> to their  children. </p>
                    <p>Management is <strong>confident</strong> that the Zivuse Trust will  play an <strong>integral</strong> role in the future <strong>growth </strong>of the Renati Group  and provide great, <strong>long-term</strong> financial benefits and <strong>security</strong> for  Renati Group employees.</p>
                </div>            
                <div class="col-md-4 col-md-offset-1">
                    
                </div>
            </div>
        </div>
        <p class="clearfix"></p>
        <div class="row">
            <div class="container">
              <div class="col-md-7"><img class="pull-right" src="images/zivuse.png" alt="Zivuse Trust"/>

                <h3>Beneficiaries of the Trust </h3>
                <ul>
                    <li>Historically <strong>disadvantaged black</strong> South  African employees of the Renati Group of companies, who hold a <strong>51%</strong> fixed  capital interest in the Trust.</li>
                    <li>All other <strong>employees</strong> of the Renati Group of  companies.</li>
                </ul>
                <h3>Trustees</h3>
                <ul>
                  <li>Johan van Rensburg</li>
                  <li>Angelo Jospeha</li>
                  <li>Moses Makgoba</li>
                  <li>Alta Nel </li>
                </ul>
                <h3>Investments of the Trust </h3>
                  <p>As of 1 June 2015, the Trust investment interest is <strong>51% equity participation</strong> in Renati Exchange Pty Ltd.<br>
                  </p>
                <h3>Compliance </h3>
                  <p>The  Board of Trustees manage the Trust, in accordance with the <strong>terms and  conditions</strong> of the Trust Deed and South African <strong>legislation</strong> and laws.  The Board of Trustees is comprised of representatives of each <strong>beneficiary</strong> group, with the chairman <strong>alternating</strong> on an annual basis.</p>
                  
                </div>            
                <div class="col-md-4 col-md-offset-1">
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