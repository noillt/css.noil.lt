<?php
    require_once('../config.php');

    $influx_conn = new mysqli(influx_config[0],influx_config[1],influx_config[2],influx_config[3]);
    if ($influx_conn->connect_error) die ("Connection to database failed");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="canonical" href="https://css.noil.lt"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Counter-Strike Surf Map Tier List (noil.lt)</title>
        <meta name="description" content="A full list of counter-strike surf maps and their tiers.">
        <meta name="keywords" content="Lithuania, Lietuvos, Lietuva, Counter-Strike, Source, Surf, SurfTimer, Germany, Hetzner, Serveris, Serveriu Sarasas, Surf Serveris, Lietuvos surfas, Surfas, CSS Downloads, css server, css surf">
        <link rel="icon" type="image/png" href="favico.png" />
        <style>
            body {
                background-color: #151515;
                color: #B4A5A5;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            a { color: #7790d9; text-decoration: none; }
            a:hover { color: #7790d9; text-decoration: none; }
            a:visited { color: #7790d9; text-decoration: none; }
            .logo {
                width: 300px;
                margin: 0 auto;
                margin-top: 5%;
                text-align: center;
            }
            .header { 
              margin-top: 25px;
            }
            .maps {
              width: 100%;
              max-width: 1920px;
              margin: 0 auto;
              margin-top: 25px;
              display: grid;
              grid-gap: 10px;
              grid-template-columns: repeat(4, 1fr);
              justify-content: center;
            }
            .maps .tier .title {
              text-align: center;
              font-size: 1.1em;
              font-weight: bold;
              border-bottom: 1px solid #3C415C;
            }
            @media (max-width:1350px) {
              .maps { grid-template-columns: repeat(3, 1fr); }
            }
            @media (max-width:800px) {
              .maps { grid-template-columns: repeat(2, 1fr); }
            }
            @media (max-width:500px) {
              .maps { grid-template-columns: repeat(1, 1fr); }
            }
        </style>
    </head>
    <body>
        <div class="logo">
            <a href="https://noil.lt"><svg height="35" viewBox="0 0 300 80" class="css-1j8o68f" version="1.0">
            <defs id="SvgjsDefs1011"></defs>
            <g id="SvgjsG1012"
                transform="matrix(0.8430281240651286,0,0,0.8430281240651286,-2.4321361298881534,-2.152250778226994)"
                fill="#ffffff">
                <g xmlns="http://www.w3.org/2000/svg">
                <path d="M50.333,2.553c-15.686,0-29.611,7.656-38.255,19.422c-1.293,1.632-2.424,3.398-3.371,5.277   C4.998,34.01,2.885,41.763,2.885,50.001c0,26.163,21.285,47.448,47.448,47.448s47.448-21.285,47.448-47.448   S76.496,2.553,50.333,2.553z M44.928,61.67c-7.897,0-14.322-6.506-14.322-14.503s6.425-14.503,14.322-14.503   S59.25,39.17,59.25,47.167S52.825,61.67,44.928,61.67z M44.928,28.412c-10.242,0-18.574,8.413-18.574,18.755   s8.332,18.755,18.574,18.755c0.116,0,0.228-0.016,0.343-0.018c-2.924,1.144-6.097,1.777-9.415,1.777   c-14.448,0-26.203-11.895-26.203-26.515c0-4.277,1.013-8.317,2.798-11.899c0.911-1.658,1.931-3.248,3.045-4.766   c4.808-6.003,12.147-9.85,20.36-9.85c14.011,0,25.488,11.185,26.171,25.192C59.196,33.132,52.599,28.412,44.928,28.412z    M50.333,93.197c-23.313,0-42.36-18.568-43.158-41.69c4.214,11.893,15.478,20.427,28.681,20.427   c16.794,0,30.456-13.802,30.456-30.767S52.649,10.4,35.855,10.4c-1.047,0-2.082,0.054-3.103,0.158   c5.374-2.405,11.321-3.754,17.58-3.754c23.818,0,43.196,19.378,43.196,43.196S74.151,93.197,50.333,93.197z">
                </path>
                </g>
            </g>
            <g id="SvgjsG1013"
                transform="matrix(2.631024823431762,0,0,2.631024823431762,94.81102155151216,-27.54419600605004)"
                fill="#ffffff">
                <path d="M26.152 27.344 l-2.9492 12.734 l-9.2188 0 l2.5195 -10.898 c0.078125 -0.42969 0.15625 -0.80078 0.21484 -1.2109 c0.039063 -0.19531 0.078125 -0.41016 0.11719 -0.625 l-1.9727 0 c0.019531 -0.17578 0.039063 -0.33203 0.078125 -0.52734 c0.039063 -0.35156 0.078125 -0.64453 0.11719 -0.87891 c0.019531 -0.29297 0.019531 -0.46875 0 -0.56641 l0 0.058594 c-0.29297 -1.1328 -2.0313 -0.9375 -2.4609 -0.058594 l-0.44922 1.9727 l1.9336 0 l-2.9102 12.734 l-9.1992 0 l2.9297 -12.734 l-1.9727 0 l2.1289 -9.2773 l9.1797 0 l-0.15625 0.83984 c3.0469 -1.4453 7.4805 -2.793 9.8828 0.80078 c0.97656 1.4453 1.1719 3.5352 0.50781 6.3672 l-0.29297 1.2695 l1.9727 0 z M51.875 29.082 c-1.6211 7.1094 -6.8164 11.641 -14.199 11.641 c-7.207 0 -10.547 -4.3359 -8.8672 -11.641 c0.13672 -0.58594 0.29297 -1.1914 0.52734 -1.7383 l-2.0117 0 c2.0898 -6.1914 7.0313 -9.9414 13.75 -9.9414 c6.9141 0 9.8633 4.043 9.1406 9.9414 l1.9727 0 c-0.058594 0.54688 -0.17578 1.1523 -0.3125 1.7383 z M36.68 27.344 l1.9531 0 c-1.1133 2.9297 -1.3281 6.7578 0.60547 6.7578 c1.7773 0 3.3594 -3.8281 3.5938 -6.7578 l-1.9336 0 c0.15625 -1.8359 -0.21484 -3.3203 -1.3672 -3.3203 c-1.0742 0 -2.1484 1.4844 -2.8516 3.3203 z M53.49609375 27.578 l-2.0508 0 l1.6992 -7.5586 l9.3164 0 l-1.6992 7.5586 l2.0703 0 l-2.7539 12.422 l-9.3164 0 z M64.86359375 10.469000000000001 l-1.6211 7.0703 l-9.6484 0 l1.6211 -7.0703 l9.6484 0 z M66.9140375 27.578 l-2.1289 0 l3.9648 -17.109 l9.2383 0 l-3.9258 17.109 l2.1094 0 l-2.8906 12.422 l-9.2773 0 z">
                </path>
            </g>
            <g id="SvgjsG1012"
                transform="matrix(0.8430281240651286,0,0,0.8430281240651286,-2.4321361298881534,-2.152250778226994)"
                fill="#ffffff">
                <g xmlns="http://www.w3.org/2000/svg">
                <path d="M50.333,2.553c-15.686,0-29.611,7.656-38.255,19.422c-1.293,1.632-2.424,3.398-3.371,5.277   C4.998,34.01,2.885,41.763,2.885,50.001c0,26.163,21.285,47.448,47.448,47.448s47.448-21.285,47.448-47.448   S76.496,2.553,50.333,2.553z M44.928,61.67c-7.897,0-14.322-6.506-14.322-14.503s6.425-14.503,14.322-14.503   S59.25,39.17,59.25,47.167S52.825,61.67,44.928,61.67z M44.928,28.412c-10.242,0-18.574,8.413-18.574,18.755   s8.332,18.755,18.574,18.755c0.116,0,0.228-0.016,0.343-0.018c-2.924,1.144-6.097,1.777-9.415,1.777   c-14.448,0-26.203-11.895-26.203-26.515c0-4.277,1.013-8.317,2.798-11.899c0.911-1.658,1.931-3.248,3.045-4.766   c4.808-6.003,12.147-9.85,20.36-9.85c14.011,0,25.488,11.185,26.171,25.192C59.196,33.132,52.599,28.412,44.928,28.412z    M50.333,93.197c-23.313,0-42.36-18.568-43.158-41.69c4.214,11.893,15.478,20.427,28.681,20.427   c16.794,0,30.456-13.802,30.456-30.767S52.649,10.4,35.855,10.4c-1.047,0-2.082,0.054-3.103,0.158   c5.374-2.405,11.321-3.754,17.58-3.754c23.818,0,43.196,19.378,43.196,43.196S74.151,93.197,50.333,93.197z">
                </path>
                </g>
            </g>
            </svg></a>
            <div class="header">
              Counter-Strike Surf Map Tier List
            </div>
        </div>
        <div class="maps">
            <div class="tier">
              <div class="title">Tier 1</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='1'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 2</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='2'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 3</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='3'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 4</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='4'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 5</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='5'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 6</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='6'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 7</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='7'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
            <div class="tier">
              <div class="title">Tier 8</div>
              <?php
                $maps_query = "SELECT tier, mapname FROM maps WHERE tier='8'";
                $maps_result = $influx_conn->query($maps_query);
                while($row = $maps_result->fetch_assoc()) {
                  echo $row['mapname']."<br>";
                }
              ?>
            </div>
        </div>
    </body>
</html>
<?php $influx_conn->close(); ?>