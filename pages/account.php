<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Washiapp</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Icon.png">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <link rel="stylesheet" href="../view/style.css">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="../assets/css/theme.css" rel="stylesheet">
    <link href="../assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">

  </head>


  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass"><a class="navbar-brand text-left" href="/wablas">
            <div class="d-flex align-items-center py-3"><img class="mr-2" src="../assets/img/washiapp-blue.png" alt="" width="200" style="-webkit-filter: drop-shadow(5px 5px 5px #222222);
    filter: drop-shadow(3px 3px 2px #222222);" />
            </div>
          </a>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <ul class="navbar-nav flex-column">
              <li class="nav-item"><a class="nav-link" href="/wablas/" aria-controls="home">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-mobile-alt"></span></span><span>Device</span>
                  </div>
                </a>
              </li>
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-clipboard-list"></span></span><span>History</span><span class="badge badge-pill ml-2 badge-soft-success"></span>
                  </div>
                </a>
                <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/status.php">Message Status</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/log.php">Log</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-handshake"></span></span><span>Services</span>
                  </div>
                </a>
                <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/activity.php">Send Message</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/schedule.php">Schedule</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages/activity.html">Reminder</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/wablas/pages/sms.php">SMS</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/wablas/pages/billing.php" >
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-credit-card"></span></span><span>Billing</span>
                  </div>
                </a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="/wablas/pages/account.php">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span>Account</span>
                  </div>
                </a></li>
            </ul>
            <hr class="border-300 my-2" />
            <ul class="navbar-nav flex-column">
              <li class="nav-item"><a class="nav-link" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span>API Documentation</span>
                  </div>
                </a>
              </li> 
            </ul>

          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass fs--1 font-weight-semi-bold row navbar-top sticky-kit navbar-expand">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand text-left ml-3" href="/wablas">
              <div class="d-flex align-items-center"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span>
              </div>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown1">
              <ul class="navbar-nav align-items-center d-none d-lg-block">
                <li class="nav-item">
                  <h3></h3>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown"><a class="nav-link px-0" href="e-commerce/shopping-cart.html"><span class="fas fa-sign-out-alt fs-4" data-fa-transform="shrink-7"></span></a></li>
                
                
              </ul>
            </div>
          </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <div class="card-title">
                                    <span class="text-white fs-0">Account Setting</span>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="">
                            <div class="form-group">
                                    <label for="uid">User ID</label>
                                    <input class="form-control fs--1 text-600" id="uid" type="text" placeholder="Name" value="W1644" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input class="form-control fs--1 text-800 bg-100" id="name" type="text" placeholder="Name" value="FEBRIAN" >
                                </div>
                                <div class="form-group">
                                    <label for="email1">E-mail Address</label>
                                    <input class="form-control fs--1 text-800 bg-100" id="email1" type="email" value="woowhatsapp@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="admin">Admin whatsapp Number</label>
                                    <input class="form-control fs--1 text-800 bg-100" id="admin" type="text" placeholder="Name" value="6289648615564" >
                                    <span class="font-italic fs--2">
                                    if the service is down, we will send info to this number. try to be different from WhatsApp sender.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="secret">Scret Key</label>
                                    <input class="form-control fs--1 text-800 bg-100" id="secret" type="text" placeholder="Name" value="FrZBxQJSw6hLgD9XuZelYgQGpD6C0z0UbT6O44OSPnZk8cXNFpr2QBp3BV9UCpH3" >
                                </div>
                                <div class="form-group" data-select2-id="5">
                                    <label for="input-text" class="control-label">Time Zone</label>
                                    <select class="form-control select2 select2-hidden-accessible fs--1 bg-100 text-800" name="timezone" id="timezone" data-select2-id="timezone" tabindex="-1" aria-hidden="true">
                                        <option value="Asia/Jakarta" data-select2-id="3">Asia/Jakarta </option>                          
                                        <option value="Etc/GMT+12" data-select2-id="9">Etc/GMT+12</option>
                                        <option value="Etc/GMT+11" data-select2-id="10">Etc/GMT+11</option>
                                        <option value="Pacific/Midway" data-select2-id="11">Pacific/Midway</option>
                                        <option value="Pacific/Niue" data-select2-id="12">Pacific/Niue</option>
                                        <option value="Pacific/Pago_Pago" data-select2-id="13">Pacific/Pago_Pago</option>
                                        <option value="Etc/GMT+10" data-select2-id="14">Etc/GMT+10</option>
                                        <option value="Pacific/Honolulu" data-select2-id="15">Pacific/Honolulu</option>
                                        <option value="Pacific/Johnston" data-select2-id="16">Pacific/Johnston</option>
                                        <option value="Pacific/Rarotonga" data-select2-id="17">Pacific/Rarotonga</option>
                                        <option value="Pacific/Tahiti" data-select2-id="18">Pacific/Tahiti</option>
                                        <option value="America/Anchorage" data-select2-id="19">America/Anchorage</option>
                                        <option value="America/Juneau" data-select2-id="20">America/Juneau</option>
                                        <option value="America/Nome" data-select2-id="21">America/Nome</option>
                                        <option value="America/Sitka" data-select2-id="22">America/Sitka</option>
                                        <option value="America/Yakutat" data-select2-id="23">America/Yakutat</option>
                                        <option value="America/Santa_Isabel" data-select2-id="24">America/Santa_Isabel</option>
                                        <option value="America/Dawson" data-select2-id="25">America/Dawson</option>
                                        <option value="America/Los_Angeles" data-select2-id="26">America/Los_Angeles</option>
                                        <option value="America/Tijuana" data-select2-id="27">America/Tijuana</option>
                                        <option value="America/Vancouver" data-select2-id="28">America/Vancouver</option>
                                        <option value="America/Whitehorse" data-select2-id="29">America/Whitehorse</option>
                                        <option value="America/Dawson" data-select2-id="30">America/Dawson</option>
                                        <option value="America/Los_Angeles" data-select2-id="31">America/Los_Angeles</option>
                                        <option value="America/Tijuana" data-select2-id="32">America/Tijuana</option>
                                        <option value="America/Vancouver" data-select2-id="33">America/Vancouver</option>
                                        <option value="America/Whitehorse" data-select2-id="34">America/Whitehorse</option>
                                        <option value="PST8PDT" data-select2-id="35">PST8PDT</option>
                                        <option value="America/Creston" data-select2-id="36">America/Creston</option>
                                        <option value="America/Dawson_Creek" data-select2-id="37">America/Dawson_Creek</option>
                                        <option value="America/Hermosillo" data-select2-id="38">America/Hermosillo</option>
                                        <option value="America/Phoenix" data-select2-id="39">America/Phoenix</option>
                                        <option value="Etc/GMT+7" data-select2-id="40">Etc/GMT+7</option>
                                        <option value="America/Chihuahua" data-select2-id="41">America/Chihuahua</option>
                                        <option value="America/Mazatlan" data-select2-id="42">America/Mazatlan</option>
                                        <option value="America/Boise" data-select2-id="43">America/Boise</option>
                                        <option value="America/Cambridge_Bay" data-select2-id="44">America/Cambridge_Bay</option>
                                        <option value="America/Denver" data-select2-id="45">America/Denver</option>
                                        <option value="America/Edmonton" data-select2-id="46">America/Edmonton</option>
                                        <option value="America/Inuvik" data-select2-id="47">America/Inuvik</option>
                                        <option value="America/Ojinaga" data-select2-id="48">America/Ojinaga</option>
                                        <option value="America/Yellowknife" data-select2-id="49">America/Yellowknife</option>
                                        <option value="MST7MDT" data-select2-id="50">MST7MDT</option>
                                        <option value="America/Belize" data-select2-id="51">America/Belize</option>
                                        <option value="America/Costa_Rica" data-select2-id="52">America/Costa_Rica</option>
                                        <option value="America/El_Salvador" data-select2-id="53">America/El_Salvador</option>
                                        <option value="America/Guatemala" data-select2-id="54">America/Guatemala</option>
                                        <option value="America/Managua" data-select2-id="55">America/Managua</option>
                                        <option value="America/Tegucigalpa" data-select2-id="56">America/Tegucigalpa</option>
                                        <option value="Etc/GMT+6" data-select2-id="57">Etc/GMT+6</option>
                                        <option value="Pacific/Galapagos" data-select2-id="58">Pacific/Galapagos</option>
                                        <option value="America/Chicago" data-select2-id="59">America/Chicago</option>
                                        <option value="America/Indiana/Knox" data-select2-id="60">America/Indiana/Knox</option>
                                        <option value="America/Indiana/Tell_City" data-select2-id="61">America/Indiana/Tell_City</option>
                                        <option value="America/Matamoros" data-select2-id="62">America/Matamoros</option>
                                        <option value="America/Menominee" data-select2-id="63">America/Menominee</option>
                                        <option value="America/North_Dakota/Beulah" data-select2-id="64">America/North_Dakota/Beulah</option>
                                        <option value="America/North_Dakota/Center" data-select2-id="65">America/North_Dakota/Center</option>
                                        <option value="America/North_Dakota/New_Salem" data-select2-id="66">America/North_Dakota/New_Salem</option>
                                        <option value="America/Rainy_River" data-select2-id="67">America/Rainy_River</option>
                                        <option value="America/Rankin_Inlet" data-select2-id="68">America/Rankin_Inlet</option>
                                        <option value="America/Resolute" data-select2-id="69">America/Resolute</option>
                                        <option value="America/Winnipeg" data-select2-id="70">America/Winnipeg</option>
                                        <option value="CST6CDT" data-select2-id="71">CST6CDT</option>
                                        <option value="America/Bahia_Banderas" data-select2-id="72">America/Bahia_Banderas</option>
                                        <option value="America/Cancun" data-select2-id="73">America/Cancun</option>
                                        <option value="America/Merida" data-select2-id="74">America/Merida</option>
                                        <option value="America/Mexico_City" data-select2-id="75">America/Mexico_City</option>
                                        <option value="America/Monterrey" data-select2-id="76">America/Monterrey</option>
                                        <option value="America/Regina" data-select2-id="77">America/Regina</option>
                                        <option value="America/Swift_Current" data-select2-id="78">America/Swift_Current</option>
                                        <option value="America/Bogota" data-select2-id="79">America/Bogota</option>
                                        <option value="America/Cayman" data-select2-id="80">America/Cayman</option>
                                        <option value="America/Coral_Harbour" data-select2-id="81">America/Coral_Harbour</option>
                                        <option value="America/Eirunepe" data-select2-id="82">America/Eirunepe</option>
                                        <option value="America/Guayaquil" data-select2-id="83">America/Guayaquil</option>
                                        <option value="America/Jamaica" data-select2-id="84">America/Jamaica</option>
                                        <option value="America/Lima" data-select2-id="85">America/Lima</option>
                                        <option value="America/Panama" data-select2-id="86">America/Panama</option>
                                        <option value="America/Rio_Branco" data-select2-id="87">America/Rio_Branco</option>
                                        <option value="Etc/GMT+5" data-select2-id="88">Etc/GMT+5</option>
                                        <option value="America/Detroit" data-select2-id="89">America/Detroit</option>
                                        <option value="America/Havana" data-select2-id="90">America/Havana</option>
                                        <option value="America/Indiana/Petersburg" data-select2-id="91">America/Indiana/Petersburg</option>
                                        <option value="America/Indiana/Vincennes" data-select2-id="92">America/Indiana/Vincennes</option>
                                        <option value="America/Indiana/Winamac" data-select2-id="93">America/Indiana/Winamac</option>
                                        <option value="America/Iqaluit" data-select2-id="94">America/Iqaluit</option>
                                        <option value="America/Kentucky/Monticello" data-select2-id="95">America/Kentucky/Monticello</option>
                                        <option value="America/Louisville" data-select2-id="96">America/Louisville</option>
                                        <option value="America/Montreal" data-select2-id="97">America/Montreal</option>
                                        <option value="America/Nassau" data-select2-id="98">America/Nassau</option>
                                        <option value="America/New_York" data-select2-id="99">America/New_York</option>
                                        <option value="America/Nipigon" data-select2-id="100">America/Nipigon</option>
                                        <option value="America/Pangnirtung" data-select2-id="101">America/Pangnirtung</option>
                                        <option value="America/Port-au-Prince" data-select2-id="102">America/Port-au-Prince</option>
                                        <option value="America/Thunder_Bay" data-select2-id="103">America/Thunder_Bay</option>
                                        <option value="America/Toronto" data-select2-id="104">America/Toronto</option>
                                        <option value="EST5EDT" data-select2-id="105">EST5EDT</option>
                                        <option value="America/Indiana/Marengo" data-select2-id="106">America/Indiana/Marengo</option>
                                        <option value="America/Indiana/Vevay" data-select2-id="107">America/Indiana/Vevay</option>
                                        <option value="America/Indianapolis" data-select2-id="108">America/Indianapolis</option>
                                        <option value="America/Caracas" data-select2-id="109">America/Caracas</option>
                                        <option value="America/Asuncion" data-select2-id="110">America/Asuncion</option>
                                        <option value="America/Glace_Bay" data-select2-id="111">America/Glace_Bay</option>
                                        <option value="America/Goose_Bay" data-select2-id="112">America/Goose_Bay</option>
                                        <option value="America/Halifax" data-select2-id="113">America/Halifax</option>
                                        <option value="America/Moncton" data-select2-id="114">America/Moncton</option>
                                        <option value="America/Thule" data-select2-id="115">America/Thule</option>
                                        <option value="Atlantic/Bermuda" data-select2-id="116">Atlantic/Bermuda</option>
                                        <option value="America/Campo_Grande" data-select2-id="117">America/Campo_Grande</option>
                                        <option value="America/Cuiaba" data-select2-id="118">America/Cuiaba</option>
                                        <option value="America/Anguilla" data-select2-id="119">America/Anguilla</option>
                                        <option value="America/Antigua" data-select2-id="120">America/Antigua</option>
                                        <option value="America/Aruba" data-select2-id="121">America/Aruba</option>
                                        <option value="America/Barbados" data-select2-id="122">America/Barbados</option>
                                        <option value="America/Blanc-Sablon" data-select2-id="123">America/Blanc-Sablon</option>
                                        <option value="America/Boa_Vista" data-select2-id="124">America/Boa_Vista</option>
                                        <option value="America/Curacao" data-select2-id="125">America/Curacao</option>
                                        <option value="America/Dominica" data-select2-id="126">America/Dominica</option>
                                        <option value="America/Grand_Turk" data-select2-id="127">America/Grand_Turk</option>
                                        <option value="America/Grenada" data-select2-id="128">America/Grenada</option>
                                        <option value="America/Guadeloupe" data-select2-id="129">America/Guadeloupe</option>
                                        <option value="America/Guyana" data-select2-id="130">America/Guyana</option>
                                        <option value="America/Kralendijk" data-select2-id="131">America/Kralendijk</option>
                                        <option value="America/La_Paz" data-select2-id="132">America/La_Paz</option>
                                        <option value="America/Lower_Princes" data-select2-id="133">America/Lower_Princes</option>
                                        <option value="America/Manaus" data-select2-id="134">America/Manaus</option>
                                        <option value="America/Marigot" data-select2-id="135">America/Marigot</option>
                                        <option value="America/Martinique" data-select2-id="136">America/Martinique</option>
                                        <option value="America/Montserrat" data-select2-id="137">America/Montserrat</option>
                                        <option value="America/Port_of_Spain" data-select2-id="138">America/Port_of_Spain</option>
                                        <option value="America/Porto_Velho" data-select2-id="139">America/Porto_Velho</option>
                                        <option value="America/Puerto_Rico" data-select2-id="140">America/Puerto_Rico</option>
                                        <option value="America/Santo_Domingo" data-select2-id="141">America/Santo_Domingo</option>
                                        <option value="America/St_Barthelemy" data-select2-id="142">America/St_Barthelemy</option>
                                        <option value="America/St_Kitts" data-select2-id="143">America/St_Kitts</option>
                                        <option value="America/St_Lucia" data-select2-id="144">America/St_Lucia</option>
                                        <option value="America/St_Thomas" data-select2-id="145">America/St_Thomas</option>
                                        <option value="America/St_Vincent" data-select2-id="146">America/St_Vincent</option>
                                        <option value="America/Tortola" data-select2-id="147">America/Tortola</option>
                                        <option value="Etc/GMT+4" data-select2-id="148">Etc/GMT+4</option>
                                        <option value="America/Santiago" data-select2-id="149">America/Santiago</option>
                                        <option value="Antarctica/Palmer" data-select2-id="150">Antarctica/Palmer</option>
                                        <option value="America/St_Johns" data-select2-id="151">America/St_Johns</option>
                                        <option value="America/Sao_Paulo" data-select2-id="152">America/Sao_Paulo</option>
                                        <option value="America/Argentina/La_Rioja" data-select2-id="153">America/Argentina/La_Rioja</option>
                                        <option value="America/Argentina/Rio_Gallegos" data-select2-id="154">America/Argentina/Rio_Gallegos</option>
                                        <option value="America/Argentina/Salta" data-select2-id="155">America/Argentina/Salta</option>
                                        <option value="America/Argentina/San_Juan" data-select2-id="156">America/Argentina/San_Juan</option>
                                        <option value="America/Argentina/San_Luis" data-select2-id="157">America/Argentina/San_Luis</option>
                                        <option value="America/Argentina/Tucuman" data-select2-id="158">America/Argentina/Tucuman</option>
                                        <option value="America/Argentina/Ushuaia" data-select2-id="159">America/Argentina/Ushuaia</option>
                                        <option value="America/Buenos_Aires" data-select2-id="160">America/Buenos_Aires</option>
                                        <option value="America/Catamarca" data-select2-id="161">America/Catamarca</option>
                                        <option value="America/Cordoba" data-select2-id="162">America/Cordoba</option>
                                        <option value="America/Jujuy" data-select2-id="163">America/Jujuy</option>
                                        <option value="America/Mendoza" data-select2-id="164">America/Mendoza</option>
                                        <option value="America/Araguaina" data-select2-id="165">America/Araguaina</option>
                                        <option value="America/Belem" data-select2-id="166">America/Belem</option>
                                        <option value="America/Cayenne" data-select2-id="167">America/Cayenne</option>
                                        <option value="America/Fortaleza" data-select2-id="168">America/Fortaleza</option>
                                        <option value="America/Maceio" data-select2-id="169">America/Maceio</option>
                                        <option value="America/Paramaribo" data-select2-id="170">America/Paramaribo</option>
                                        <option value="America/Recife" data-select2-id="171">America/Recife</option>
                                        <option value="America/Santarem" data-select2-id="172">America/Santarem</option>
                                        <option value="Antarctica/Rothera" data-select2-id="173">Antarctica/Rothera</option>
                                        <option value="Atlantic/Stanley" data-select2-id="174">Atlantic/Stanley</option>
                                        <option value="Etc/GMT+3" data-select2-id="175">Etc/GMT+3</option>
                                        <option value="America/Godthab" data-select2-id="176">America/Godthab</option>
                                        <option value="America/Montevideo" data-select2-id="177">America/Montevideo</option>
                                        <option value="America/Bahia" data-select2-id="178">America/Bahia</option>
                                        <option value="America/Noronha" data-select2-id="179">America/Noronha</option>
                                        <option value="Atlantic/South_Georgia" data-select2-id="180">Atlantic/South_Georgia</option>
                                        <option value="Etc/GMT+2" data-select2-id="181">Etc/GMT+2</option>
                                        <option value="America/Scoresbysund" data-select2-id="182">America/Scoresbysund</option>
                                        <option value="Atlantic/Azores" data-select2-id="183">Atlantic/Azores</option>
                                        <option value="Atlantic/Cape_Verde" data-select2-id="184">Atlantic/Cape_Verde</option>
                                        <option value="Etc/GMT+1" data-select2-id="185">Etc/GMT+1</option>
                                        <option value="Africa/Casablanca" data-select2-id="186">Africa/Casablanca</option>
                                        <option value="Africa/El_Aaiun" data-select2-id="187">Africa/El_Aaiun</option>
                                        <option value="America/Danmarkshavn" data-select2-id="188">America/Danmarkshavn</option>
                                        <option value="Etc/GMT" data-select2-id="189">Etc/GMT</option>
                                        <option value="Europe/Isle_of_Man" data-select2-id="190">Europe/Isle_of_Man</option>
                                        <option value="Europe/Guernsey" data-select2-id="191">Europe/Guernsey</option>
                                        <option value="Europe/Jersey" data-select2-id="192">Europe/Jersey</option>
                                        <option value="Europe/London" data-select2-id="193">Europe/London</option>
                                        <option value="Europe/Isle_of_Man" data-select2-id="194">Europe/Isle_of_Man</option>
                                        <option value="Europe/Guernsey" data-select2-id="195">Europe/Guernsey</option>
                                        <option value="Europe/Jersey" data-select2-id="196">Europe/Jersey</option>
                                        <option value="Europe/London" data-select2-id="197">Europe/London</option>
                                        <option value="Atlantic/Canary" data-select2-id="198">Atlantic/Canary</option>
                                        <option value="Atlantic/Faeroe" data-select2-id="199">Atlantic/Faeroe</option>
                                        <option value="Atlantic/Madeira" data-select2-id="200">Atlantic/Madeira</option>
                                        <option value="Europe/Dublin" data-select2-id="201">Europe/Dublin</option>
                                        <option value="Europe/Lisbon" data-select2-id="202">Europe/Lisbon</option>
                                        <option value="Africa/Abidjan" data-select2-id="203">Africa/Abidjan</option>
                                        <option value="Africa/Accra" data-select2-id="204">Africa/Accra</option>
                                        <option value="Africa/Bamako" data-select2-id="205">Africa/Bamako</option>
                                        <option value="Africa/Banjul" data-select2-id="206">Africa/Banjul</option>
                                        <option value="Africa/Bissau" data-select2-id="207">Africa/Bissau</option>
                                        <option value="Africa/Conakry" data-select2-id="208">Africa/Conakry</option>
                                        <option value="Africa/Dakar" data-select2-id="209">Africa/Dakar</option>
                                        <option value="Africa/Freetown" data-select2-id="210">Africa/Freetown</option>
                                        <option value="Africa/Lome" data-select2-id="211">Africa/Lome</option>
                                        <option value="Africa/Monrovia" data-select2-id="212">Africa/Monrovia</option>
                                        <option value="Africa/Nouakchott" data-select2-id="213">Africa/Nouakchott</option>
                                        <option value="Africa/Ouagadougou" data-select2-id="214">Africa/Ouagadougou</option>
                                        <option value="Africa/Sao_Tome" data-select2-id="215">Africa/Sao_Tome</option>
                                        <option value="Atlantic/Reykjavik" data-select2-id="216">Atlantic/Reykjavik</option>
                                        <option value="Atlantic/St_Helena" data-select2-id="217">Atlantic/St_Helena</option>
                                        <option value="Arctic/Longyearbyen" data-select2-id="218">Arctic/Longyearbyen</option>
                                        <option value="Europe/Amsterdam" data-select2-id="219">Europe/Amsterdam</option>
                                        <option value="Europe/Andorra" data-select2-id="220">Europe/Andorra</option>
                                        <option value="Europe/Berlin" data-select2-id="221">Europe/Berlin</option>
                                        <option value="Europe/Busingen" data-select2-id="222">Europe/Busingen</option>
                                        <option value="Europe/Gibraltar" data-select2-id="223">Europe/Gibraltar</option>
                                        <option value="Europe/Luxembourg" data-select2-id="224">Europe/Luxembourg</option>
                                        <option value="Europe/Malta" data-select2-id="225">Europe/Malta</option>
                                        <option value="Europe/Monaco" data-select2-id="226">Europe/Monaco</option>
                                        <option value="Europe/Oslo" data-select2-id="227">Europe/Oslo</option>
                                        <option value="Europe/Rome" data-select2-id="228">Europe/Rome</option>
                                        <option value="Europe/San_Marino" data-select2-id="229">Europe/San_Marino</option>
                                        <option value="Europe/Stockholm" data-select2-id="230">Europe/Stockholm</option>
                                        <option value="Europe/Vaduz" data-select2-id="231">Europe/Vaduz</option>
                                        <option value="Europe/Vatican" data-select2-id="232">Europe/Vatican</option>
                                        <option value="Europe/Vienna" data-select2-id="233">Europe/Vienna</option>
                                        <option value="Europe/Zurich" data-select2-id="234">Europe/Zurich</option>
                                        <option value="Europe/Belgrade" data-select2-id="235">Europe/Belgrade</option>
                                        <option value="Europe/Bratislava" data-select2-id="236">Europe/Bratislava</option>
                                        <option value="Europe/Budapest" data-select2-id="237">Europe/Budapest</option>
                                        <option value="Europe/Ljubljana" data-select2-id="238">Europe/Ljubljana</option>
                                        <option value="Europe/Podgorica" data-select2-id="239">Europe/Podgorica</option>
                                        <option value="Europe/Prague" data-select2-id="240">Europe/Prague</option>
                                        <option value="Europe/Tirane" data-select2-id="241">Europe/Tirane</option>
                                        <option value="Africa/Ceuta" data-select2-id="242">Africa/Ceuta</option>
                                        <option value="Europe/Brussels" data-select2-id="243">Europe/Brussels</option>
                                        <option value="Europe/Copenhagen" data-select2-id="244">Europe/Copenhagen</option>
                                        <option value="Europe/Madrid" data-select2-id="245">Europe/Madrid</option>
                                        <option value="Europe/Paris" data-select2-id="246">Europe/Paris</option>
                                        <option value="Europe/Sarajevo" data-select2-id="247">Europe/Sarajevo</option>
                                        <option value="Europe/Skopje" data-select2-id="248">Europe/Skopje</option>
                                        <option value="Europe/Warsaw" data-select2-id="249">Europe/Warsaw</option>
                                        <option value="Europe/Zagreb" data-select2-id="250">Europe/Zagreb</option>
                                        <option value="Africa/Algiers" data-select2-id="251">Africa/Algiers</option>
                                        <option value="Africa/Bangui" data-select2-id="252">Africa/Bangui</option>
                                        <option value="Africa/Brazzaville" data-select2-id="253">Africa/Brazzaville</option>
                                        <option value="Africa/Douala" data-select2-id="254">Africa/Douala</option>
                                        <option value="Africa/Kinshasa" data-select2-id="255">Africa/Kinshasa</option>
                                        <option value="Africa/Lagos" data-select2-id="256">Africa/Lagos</option>
                                        <option value="Africa/Libreville" data-select2-id="257">Africa/Libreville</option>
                                        <option value="Africa/Luanda" data-select2-id="258">Africa/Luanda</option>
                                        <option value="Africa/Malabo" data-select2-id="259">Africa/Malabo</option>
                                        <option value="Africa/Ndjamena" data-select2-id="260">Africa/Ndjamena</option>
                                        <option value="Africa/Niamey" data-select2-id="261">Africa/Niamey</option>
                                        <option value="Africa/Porto-Novo" data-select2-id="262">Africa/Porto-Novo</option>
                                        <option value="Africa/Tunis" data-select2-id="263">Africa/Tunis</option>
                                        <option value="Etc/GMT-1" data-select2-id="264">Etc/GMT-1</option>
                                        <option value="Africa/Windhoek" data-select2-id="265">Africa/Windhoek</option>
                                        <option value="Asia/Nicosia" data-select2-id="266">Asia/Nicosia</option>
                                        <option value="Europe/Athens" data-select2-id="267">Europe/Athens</option>
                                        <option value="Europe/Bucharest" data-select2-id="268">Europe/Bucharest</option>
                                        <option value="Europe/Chisinau" data-select2-id="269">Europe/Chisinau</option>
                                        <option value="Asia/Beirut" data-select2-id="270">Asia/Beirut</option>
                                        <option value="Africa/Cairo" data-select2-id="271">Africa/Cairo</option>
                                        <option value="Asia/Damascus" data-select2-id="272">Asia/Damascus</option>
                                        <option value="Asia/Nicosia" data-select2-id="273">Asia/Nicosia</option>
                                        <option value="Europe/Athens" data-select2-id="274">Europe/Athens</option>
                                        <option value="Europe/Bucharest" data-select2-id="275">Europe/Bucharest</option>
                                        <option value="Europe/Chisinau" data-select2-id="276">Europe/Chisinau</option>
                                        <option value="Europe/Helsinki" data-select2-id="277">Europe/Helsinki</option>
                                        <option value="Europe/Kiev" data-select2-id="278">Europe/Kiev</option>
                                        <option value="Europe/Mariehamn" data-select2-id="279">Europe/Mariehamn</option>
                                        <option value="Europe/Nicosia" data-select2-id="280">Europe/Nicosia</option>
                                        <option value="Europe/Riga" data-select2-id="281">Europe/Riga</option>
                                        <option value="Europe/Sofia" data-select2-id="282">Europe/Sofia</option>
                                        <option value="Europe/Tallinn" data-select2-id="283">Europe/Tallinn</option>
                                        <option value="Europe/Uzhgorod" data-select2-id="284">Europe/Uzhgorod</option>
                                        <option value="Europe/Vilnius" data-select2-id="285">Europe/Vilnius</option>
                                        <option value="Europe/Zaporozhye" data-select2-id="286">Europe/Zaporozhye</option>
                                        <option value="Africa/Blantyre" data-select2-id="287">Africa/Blantyre</option>
                                        <option value="Africa/Bujumbura" data-select2-id="288">Africa/Bujumbura</option>
                                        <option value="Africa/Gaborone" data-select2-id="289">Africa/Gaborone</option>
                                        <option value="Africa/Harare" data-select2-id="290">Africa/Harare
                                        <option value="Africa/Johannesburg" data-select2-id="291">Africa/Johannesburg
                                        <option value="Africa/Kigali" data-select2-id="292">Africa/Kigali
                                        <option value="Africa/Lubumbashi" data-select2-id="293">Africa/Lubumbashi
                                        <option value="Africa/Lusaka" data-select2-id="294">Africa/Lusaka
                                        <option value="Africa/Maputo" data-select2-id="295">Africa/Maputo
                                        <option value="Africa/Maseru" data-select2-id="296">Africa/Maseru
                                        <option value="Africa/Mbabane" data-select2-id="297">Africa/Mbabane
                                        <option value="Etc/GMT-2" data-select2-id="298">Etc/GMT-2
                                        <option value="Europe/Helsinki" data-select2-id="299">Europe/Helsinki
                                        <option value="Europe/Kiev" data-select2-id="300">Europe/Kiev
                                        <option value="Europe/Mariehamn" data-select2-id="301">Europe/Mariehamn
                                        <option value="Europe/Riga" data-select2-id="302">Europe/Riga
                                        <option value="Europe/Sofia" data-select2-id="303">Europe/Sofia
                                        <option value="Europe/Tallinn" data-select2-id="304">Europe/Tallinn
                                        <option value="Europe/Uzhgorod" data-select2-id="305">Europe/Uzhgorod
                                        <option value="Europe/Vilnius" data-select2-id="306">Europe/Vilnius
                                        <option value="Europe/Zaporozhye" data-select2-id="307">Europe/Zaporozhye
                                        <option value="Europe/Istanbul" data-select2-id="308">Europe/Istanbul
                                        <option value="Asia/Jerusalem" data-select2-id="309">Asia/Jerusalem
                                        <option value="Africa/Tripoli" data-select2-id="310">Africa/Tripoli
                                        <option value="Asia/Amman" data-select2-id="311">Asia/Amman
                                        <option value="Asia/Baghdad" data-select2-id="312">Asia/Baghdad
                                        <option value="Europe/Kaliningrad" data-select2-id="313">Europe/Kaliningrad
                                        <option value="Europe/Minsk" data-select2-id="314">Europe/Minsk
                                        <option value="Asia/Aden" data-select2-id="315">Asia/Aden
                                        <option value="Asia/Bahrain" data-select2-id="316">Asia/Bahrain
                                        <option value="Asia/Kuwait" data-select2-id="317">Asia/Kuwait
                                        <option value="Asia/Qatar" data-select2-id="318">Asia/Qatar
                                        <option value="Asia/Riyadh" data-select2-id="319">Asia/Riyadh
                                        <option value="Africa/Addis_Ababa" data-select2-id="320">Africa/Addis_Ababa
                                        <option value="Africa/Asmera" data-select2-id="321">Africa/Asmera
                                        <option value="Africa/Dar_es_Salaam" data-select2-id="322">Africa/Dar_es_Salaam
                                        <option value="Africa/Djibouti" data-select2-id="323">Africa/Djibouti
                                        <option value="Africa/Juba" data-select2-id="324">Africa/Juba
                                        <option value="Africa/Kampala" data-select2-id="325">Africa/Kampala
                                        <option value="Africa/Khartoum" data-select2-id="326">Africa/Khartoum
                                        <option value="Africa/Mogadishu" data-select2-id="327">Africa/Mogadishu
                                        <option value="Africa/Nairobi" data-select2-id="328">Africa/Nairobi
                                        <option value="Antarctica/Syowa" data-select2-id="329">Antarctica/Syowa
                                        <option value="Etc/GMT-3" data-select2-id="330">Etc/GMT-3
                                        <option value="Indian/Antananarivo" data-select2-id="331">Indian/Antananarivo
                                        <option value="Indian/Comoro" data-select2-id="332">Indian/Comoro
                                        <option value="Indian/Mayotte" data-select2-id="333">Indian/Mayotte
                                        <option value="Europe/Kirov" data-select2-id="334">Europe/Kirov
                                        <option value="Europe/Moscow" data-select2-id="335">Europe/Moscow
                                        <option value="Europe/Simferopol" data-select2-id="336">Europe/Simferopol
                                        <option value="Europe/Volgograd" data-select2-id="337">Europe/Volgograd
                                        <option value="Europe/Astrakhan" data-select2-id="338">Europe/Astrakhan
                                        <option value="Europe/Samara" data-select2-id="339">Europe/Samara
                                        <option value="Europe/Ulyanovsk" data-select2-id="340">Europe/Ulyanovsk
                                        <option value="Asia/Tehran" data-select2-id="341">Asia/Tehran
                                        <option value="Asia/Dubai" data-select2-id="342">Asia/Dubai
                                        <option value="Asia/Muscat" data-select2-id="343">Asia/Muscat
                                        <option value="Etc/GMT-4" data-select2-id="344">Etc/GMT-4
                                        <option value="Asia/Baku" data-select2-id="345">Asia/Baku
                                        <option value="Indian/Mahe" data-select2-id="346">Indian/Mahe
                                        <option value="Indian/Mauritius" data-select2-id="347">Indian/Mauritius
                                        <option value="Indian/Reunion" data-select2-id="348">Indian/Reunion
                                        <option value="Asia/Tbilisi" data-select2-id="349">Asia/Tbilisi
                                        <option value="Asia/Yerevan" data-select2-id="350">Asia/Yerevan
                                        <option value="Asia/Kabul" data-select2-id="351">Asia/Kabul
                                        <option value="Antarctica/Mawson" data-select2-id="352">Antarctica/Mawson
                                        <option value="Asia/Aqtau" data-select2-id="353">Asia/Aqtau
                                        <option value="Asia/Aqtobe" data-select2-id="354">Asia/Aqtobe
                                        <option value="Asia/Ashgabat" data-select2-id="355">Asia/Ashgabat
                                        <option value="Asia/Dushanbe" data-select2-id="356">Asia/Dushanbe
                                        <option value="Asia/Oral" data-select2-id="357">Asia/Oral
                                        <option value="Asia/Samarkand" data-select2-id="358">Asia/Samarkand
                                        <option value="Asia/Tashkent" data-select2-id="359">Asia/Tashkent
                                        <option value="Etc/GMT-5" data-select2-id="360">Etc/GMT-5
                                        <option value="Indian/Kerguelen" data-select2-id="361">Indian/Kerguelen
                                        <option value="Indian/Maldives" data-select2-id="362">Indian/Maldives
                                        <option value="Asia/Yekaterinburg" data-select2-id="363">Asia/Yekaterinburg
                                        <option value="Asia/Karachi" data-select2-id="364">Asia/Karachi
                                        <option value="Asia/Kolkata" data-select2-id="365">Asia/Kolkata
                                        <option value="Asia/Colombo" data-select2-id="366">Asia/Colombo
                                        <option value="Asia/Katmandu" data-select2-id="367">Asia/Katmandu
                                        <option value="Antarctica/Vostok" data-select2-id="368">Antarctica/Vostok
                                        <option value="Asia/Almaty" data-select2-id="369">Asia/Almaty
                                        <option value="Asia/Bishkek" data-select2-id="370">Asia/Bishkek
                                        <option value="Asia/Qyzylorda" data-select2-id="371">Asia/Qyzylorda
                                        <option value="Asia/Urumqi" data-select2-id="372">Asia/Urumqi
                                        <option value="Etc/GMT-6" data-select2-id="373">Etc/GMT-6
                                        <option value="Indian/Chagos" data-select2-id="374">Indian/Chagos
                                        <option value="Asia/Dhaka" data-select2-id="375">Asia/Dhaka
                                        <option value="Asia/Thimphu" data-select2-id="376">Asia/Thimphu
                                        <option value="Asia/Rangoon" data-select2-id="377">Asia/Rangoon
                                        <option value="Indian/Cocos" data-select2-id="378">Indian/Cocos
                                        <option value="Antarctica/Davis" data-select2-id="379">Antarctica/Davis
                                        <option value="Asia/Bangkok" data-select2-id="380">Asia/Bangkok
                                        <option value="Asia/Hovd" data-select2-id="381">Asia/Hovd
                                        <option value="Asia/Phnom_Penh" data-select2-id="382">Asia/Phnom_Penh
                                        <option value="Asia/Pontianak" data-select2-id="383">Asia/Pontianak
                                        <option value="Asia/Saigon" data-select2-id="384">Asia/Saigon
                                        <option value="Asia/Vientiane" data-select2-id="385">Asia/Vientiane
                                        <option value="Etc/GMT-7" data-select2-id="386">Etc/GMT-7
                                        <option value="Indian/Christmas" data-select2-id="387">Indian/Christmas
                                        <option value="Asia/Novokuznetsk" data-select2-id="388">Asia/Novokuznetsk
                                        <option value="Asia/Novosibirsk" data-select2-id="389">Asia/Novosibirsk
                                        <option value="Asia/Omsk" data-select2-id="390">Asia/Omsk
                                        <option value="Asia/Hong_Kong" data-select2-id="391">Asia/Hong_Kong
                                        <option value="Asia/Macau" data-select2-id="392">Asia/Macau
                                        <option value="Asia/Shanghai" data-select2-id="393">Asia/Shanghai
                                        <option value="Asia/Krasnoyarsk" data-select2-id="394">Asia/Krasnoyarsk
                                        <option value="Asia/Brunei" data-select2-id="395">Asia/Brunei
                                        <option value="Asia/Kuala_Lumpur" data-select2-id="396">Asia/Kuala_Lumpur
                                        <option value="Asia/Kuching" data-select2-id="397">Asia/Kuching
                                        <option value="Asia/Makassar" data-select2-id="398">Asia/Makassar
                                        <option value="Asia/Manila" data-select2-id="399">Asia/Manila
                                        <option value="Asia/Singapore" data-select2-id="400">Asia/Singapore
                                        <option value="Etc/GMT-8" data-select2-id="401">Etc/GMT-8
                                        <option value="Antarctica/Casey" data-select2-id="402">Antarctica/Casey
                                        <option value="Australia/Perth" data-select2-id="403">Australia/Perth
                                        <option value="Asia/Taipei" data-select2-id="404">Asia/Taipei
                                        <option value="Asia/Choibalsan" data-select2-id="405">Asia/Choibalsan
                                        <option value="Asia/Ulaanbaatar" data-select2-id="406">Asia/Ulaanbaatar
                                        <option value="Asia/Irkutsk" data-select2-id="407">Asia/Irkutsk
                                        <option value="Asia/Dili" data-select2-id="408">Asia/Dili
                                        <option value="Asia/Jayapura" data-select2-id="409">Asia/Jayapura
                                        <option value="Asia/Tokyo" data-select2-id="410">Asia/Tokyo
                                        <option value="Etc/GMT-9" data-select2-id="411">Etc/GMT-9
                                        <option value="Pacific/Palau" data-select2-id="412">Pacific/Palau
                                        <option value="Asia/Pyongyang" data-select2-id="413">Asia/Pyongyang
                                        <option value="Asia/Seoul" data-select2-id="414">Asia/Seoul
                                        <option value="Australia/Adelaide" data-select2-id="415">Australia/Adelaide
                                        <option value="Australia/Broken_Hill" data-select2-id="416">Australia/Broken_Hill
                                        <option value="Australia/Darwin" data-select2-id="417">Australia/Darwin
                                        <option value="Australia/Brisbane" data-select2-id="418">Australia/Brisbane
                                        <option value="Australia/Lindeman" data-select2-id="419">Australia/Lindeman
                                        <option value="Australia/Melbourne" data-select2-id="420">Australia/Melbourne
                                        <option value="Australia/Sydney" data-select2-id="421">Australia/Sydney
                                        <option value="Antarctica/DumontDUrville" data-select2-id="422">Antarctica/DumontDUrville
                                        <option value="Etc/GMT-10" data-select2-id="423">Etc/GMT-10</option>
                                        <option value="Pacific/Guam" data-select2-id="424">Pacific/Guam</option>
                                        <option value="Pacific/Port_Moresby" data-select2-id="425">Pacific/Port_Moresby</option>
                                        <option value="Pacific/Saipan" data-select2-id="426">Pacific/Saipan</option>
                                        <option value="Pacific/Truk" data-select2-id="427">Pacific/Truk</option>
                                        <option value="Australia/Currie" data-select2-id="428">Australia/Currie</option>
                                        <option value="Australia/Hobart" data-select2-id="429">Australia/Hobart</option>
                                        <option value="Asia/Chita" data-select2-id="430">Asia/Chita</option>
                                        <option value="Asia/Khandyga" data-select2-id="431">Asia/Khandyga</option>
                                        <option value="Asia/Yakutsk" data-select2-id="432">Asia/Yakutsk</option>
                                        <option value="Antarctica/Macquarie" data-select2-id="433">Antarctica/Macquarie</option>
                                        <option value="Etc/GMT-11" data-select2-id="434">Etc/GMT-11</option>
                                        <option value="Pacific/Efate" data-select2-id="435">Pacific/Efate</option>
                                        <option value="Pacific/Guadalcanal" data-select2-id="436">Pacific/Guadalcanal</option>
                                        <option value="Pacific/Kosrae" data-select2-id="437">Pacific/Kosrae</option>
                                        <option value="Pacific/Noumea" data-select2-id="438">Pacific/Noumea</option>
                                        <option value="Pacific/Ponape" data-select2-id="439">Pacific/Ponape</option>
                                        <option value="Asia/Sakhalin" data-select2-id="440">Asia/Sakhalin</option>
                                        <option value="Asia/Ust-Nera" data-select2-id="441">Asia/Ust-Nera</option>
                                        <option value="Asia/Vladivostok" data-select2-id="442">Asia/Vladivostok</option>
                                        <option value="Antarctica/McMurdo" data-select2-id="443">Antarctica/McMurdo</option>
                                        <option value="Pacific/Auckland" data-select2-id="444">Pacific/Auckland</option>
                                        <option value="Etc/GMT-12" data-select2-id="445">Etc/GMT-12</option>
                                        <option value="Pacific/Funafuti" data-select2-id="446">Pacific/Funafuti</option>
                                        <option value="Pacific/Kwajalein" data-select2-id="447">Pacific/Kwajalein</option>
                                        <option value="Pacific/Majuro" data-select2-id="448">Pacific/Majuro</option>
                                        <option value="Pacific/Nauru" data-select2-id="449">Pacific/Nauru</option>
                                        <option value="Pacific/Tarawa" data-select2-id="450">Pacific/Tarawa</option>
                                        <option value="Pacific/Wake" data-select2-id="451">Pacific/Wake</option>
                                        <option value="Pacific/Wallis" data-select2-id="452">Pacific/Wallis</option>
                                        <option value="Pacific/Fiji" data-select2-id="453">Pacific/Fiji</option>
                                        <option value="Asia/Anadyr" data-select2-id="454">Asia/Anadyr</option>
                                        <option value="Asia/Kamchatka" data-select2-id="455">Asia/Kamchatka</option>
                                        <option value="Asia/Magadan" data-select2-id="456">Asia/Magadan</option>
                                        <option value="Asia/Srednekolymsk" data-select2-id="457">Asia/Srednekolymsk</option>
                                        <option value="Asia/Kamchatka" data-select2-id="458">Asia/Kamchatka</option>
                                        <option value="Etc/GMT-13" data-select2-id="459">Etc/GMT-13</option>
                                        <option value="Pacific/Enderbury" data-select2-id="460">Pacific/Enderbury</option>
                                        <option value="Pacific/Fakaofo" data-select2-id="461">Pacific/Fakaofo</option>
                                        <option value="Pacific/Tongatapu" data-select2-id="462">Pacific/Tongatapu</option>
                                        <option value="Pacific/Apia" data-select2-id="463">Pacific/Apia</option>
                                    </select>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <div class="card-title">
                                    <span class="fs-0 text-white">Setting Notification</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="notif">Downtime Notification</label>
                                        <select class="form-control fs--1 bg-100 text-800" id="notif">
                                        <option>Yes</option>
                                        <option>No</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4">
                        <div class="card">
                            <div class="card-header bg-info">
                                <div class="card-title">
                                    <span class="text-white fs-0">Change Password</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="fs--2">Completed this form</span>
                                <form action="" class="mt-3">
                                    <div class="form-group">
                                        <label for="password-old">Password Old</label>
                                        <input class="form-control bg-100 fs--1" id="password-old" type="password" >
                                    </div>
                                    <div class="form-group">
                                        <label for="password-new">New Password</label>
                                        <input class="form-control bg-100 fs--1" id="password-new" type="password" >
                                    </div>
                                    <div class="form-group">
                                        <label for="password-new-repeat">Repeat New Password</label>
                                        <input class="form-control bg-100 fs--1" id="password-new-repeat" type="password" >
                                    </div>
                                    <button class="btn btn-info btn-sm fs-0 font-weight-light float-right">Change Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
    require_once "../view/footer.php";
?>