<?php

$con = mysqli_connect('localhost','root','', 'vidhichambersdatabase');

if (isset($_POST["save"]))
{

$fname =$_POST['fname'];
$email=$_POST['email'];
$message=$_POST['message'];
$date=$_POST['date'];
$time=$_POST['time'];

$qry="INSERT INTO `appointmentinfo`(`id`, `fullname`, `email`, `reason for visit`, `date`, `time`) VALUES ('NULL','$fname','$email', '$message','$date','$time')";

$result=mysqli_query($con ,$qry);

if($result)
{
    ?> <script>
alert("Registered Successfully ||");
</script> <?php
}
else
{
	echo "failed";
}

// $query="insert into appointmentinfo.php (fname,lname,email,number,city,date,time)
// values ('$fname','$lname','$email','$num',''$city','$date','$time')";
// $result = "mysqli_query($con, $query)";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>VIDHI CHAMBERS</title>
</head>

<body id="pagetop">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="mainNav" class="collapse">
        <div class="container-fluid">
            <div class="text-light">
                <a class="heading" text="light" href="#pagetop">Vidhi Chambers</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#areas&expertise">Areas&Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#appointment request">Appointment Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact us</a>
                    </li>
                </ul>
    </nav>
    </div>
    </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner" id=home>
            <div class="carousel-item active">
                <img src="images/img1.jpg" alt="first slides" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" alt="second slides" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpg" alt="third slides" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/img4.jpg" alt="fouth slides" width="1100" height="500">
            </div>
            <a href=#home></a>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <!-----SECTIONS------>
    <section id="about">
        <div class="my-5">
            <div class="py-5">
                <div class="tab-content">
                    <div id="about">
                        <h2>About @<u> VIDHI CHAMBERS </u></h2>
                    </div>
                    <div class=" container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <img src="aboutimg.jpg" class="img-fluid" aboutimg>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p align="justify">It is a strategy driven law firm, our proficient team comprises of
                                    specialists who provide strategic advice on legal,regulatory and related matters in
                                    an integrated manner.
                                    The office is already handling matters in the field of Arbitration & Conciliation
                                    for PSPCL,
                                    PWD (B&R), Haryana, PWD (B&R), Punjab, HSBRDC. Real Estate litigation for IREO,
                                    Suncity, M3M, CHD, Raheja Developers, Odyssey,
                                    Nirala Housing, Central Park, Experion Developers, Sweta Estates, St. Patricks
                                    Reality, Ansal Housing.
                                    Electricity matters for PSPCL, DLF, ASF Insignia, Jindal Steels, HERC, PSTCL, HPPC,
                                    HPGCL, Srijyoti Renewable Energy, Nisagra, DCM.Cooperative Society litigation for
                                    Sugar Federation, Sugar Mills Panipat, HARCO Bank.
                                    Litigation in the field of Education for CCSHAU, NCTE, Central University Meerpur,
                                    Halwasiya Vidya Vihar, G.D.Goenka. </p>
                                <p align="justify">Vidhi Chambers is also representing statutory Bodies such as
                                    Municipal Corporation Faridabad,
                                    Municipal Corporation, Pnipat, Municipal Corporation, Gurgaon, Municipal Corpration,
                                    Ambala, Municipal Corporation, Chandigarh, HPCB. In the field of Medical Education
                                    we are representing GMCH, Chandigarh, PGIMER.
                                    In the area of Insurance & Health TAT AIG, NSDL, Karvy Consultancy, Muthoot Group,
                                    for telecommunication HUTCH & Spice. Service matters for PSPCL, CCSHAU, Cooperative
                                    Sugar Mills, Mewat Model School, Municipal Corporation Faridabad are being dealt
                                    with extensively.
                                    Contracts-commercial/ tender disputes for Haryana Tourism, PSPCL, PSTCL, HPGCL,
                                    Khadi Ashram, Iceberg. Miscellaneous litigation for Grasim Industries, Great Indian
                                    Nautanki Company, TIT Mills, Hindustan Gum & Chemicals. </p>

                                </p>
                                <a href="#about" class=" btn btn-dark"> check more</a>
                            </div>
                        </div>
                    </div>
    </section>

    <section id="services">
        <div class="my-5" class="bg-light">
            <div class=mx-5 class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <h2 class="text-center ">SERVICES @ <u>VIDHI CHAMBERS</u></h2>
                    </div>
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 1.jpg" class="zoom" class="width-10%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 2.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 4.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 5.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 6.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 7.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 8.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 9.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic10.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 11.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 12.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 13.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 14.jpg" class="zoom" class="width-80%">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <img src="service img/pic 15.jpg" class="zoom" class="width-80%">
                            </div>
                        </div>
                    </div>
                </div>
    </section>


    <section id="areas&expertise">
        <div class="my-5" class="bg-light">
            <div class=mx-5 class="container" bg="dark">
                <h2 class="text-center "><u>Our Expert Attorneys</u></h2><br><br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 pb-4">
                    <img class="img-top" src="teamimg/team4.jpg" alt="" style="width:13rem" height=250rem>

                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <p align="justify" class="text-bold">Vinod S. Bhardwaj started his practice as an intern under the
                        association and guidance of Sh. R. S. Cheema (Sr. Advocate), who later become the Advocate
                        General, Punjab. He then joined as an Associate in Chandigarh Chambers of Law, run by Devender
                        Pal Singh (former Additional Advocate General Haryana & Punjab) and Special Prosecutor for
                        CBI-ED and Hardeep Singh, then Assistant Advocate General.
                        In the year 2001 Vinod S. Bhardwaj started independent practice, Sh. Bhardwaj in association
                        with Sh. Hari Om Attri (presently District Judge, Rajasthan) started the Vidhi Chambers from SCO
                        74, 2nd Floor, Sector 6, MDC, Panchkula.
                        Vinod S. Bhardwaj was then appointed as the Additional Advocate General, Haryana in the year
                        2010 and continued his term till 2014, thereafter in 2014 he was appointed as Additional
                        Advocate General, Punjab wherein he represented major stakeholders in the electricity sector
                        like HPGCL, PSPCL, PSTCL, HPPC, his term as AAG Punjab culminated in the year 2017, where after
                        in the year 2018 he was appointed as a lawyer & legal consultant for HERC.
                        He also has worked in property disputes.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-12 pb-4">
                    <p align="justify">Ajay S. Bhattian enrolled with the Punjab & Haryana Bar Councilin 2015,Ajay’s
                        expertise is in Criminal Law, Consumer Law, Revenue Laws. He has vast experience in representing
                        clients before Hon’ble Punjab and Haryana High Court, HERC, Revenue Court of Financial
                        Commissioner, Haryana as well as Punjab, District Court of Haryana, Punjab as well as UT
                        Chandigarh, State and District consumer Dispute Redressal Forum. An alumni of Punjabi
                        University, Patiala, Ajay’s understating of law is immaculate, his research and drafting skills
                        are meticulous and argument delivery is to the point, definitive and articulate.
                        A thorough gentleman, Ajay is an asset to the organisation, his hardwork and dedication to the
                        profession is unique and remarkable.
                    </p>
                </div>

                <div class="col-lg-2 col-md-2col-12 pb-4">
                    <div class="container-fluid">
                        <img class="img-top" src="teamimg/team-2.jpg" alt=" " style="width:13rem" height=250rem>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 ">
                    <img class="img-top" src="teamimg/team3.jpg" alt="" style="width:13rem" height=250rem>

                </div>
                <div class="col-lg-9 col-md-9 col-12 pb-4">
                    <p align="justify">Samriddhi Sareen enrolled with the Bar Council Punjab & Haryana in 2017 and
                        specializes primarily in resolving civil and criminal disputes. An alumnus of University of
                        Petroleum & Energy Studies (Dehradun) she specializes in energy laws and represents clients
                        before the Punjab & Haryana high Court, District Court of Punjab, Haryana and UT Chandigarh,
                        National Company Law Tribunal, Chandigarh, Consumer Forums, DRT, RERA for the states of Punjab &
                        Haryana.
                        An articulate advocate, Samriddhi is passionate about the profession and believes that only
                        hardwork, dedication and unflinching commitment is the only way upward.
                    </p>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-12 pb-4">
                    <p align="justify"> Divya Arora an alumnus of campus law centre, University of Delhi, she is a
                        member of the Bar council of Punjab & Haryana since 2015. A proficient advocate Divya has
                        experience in representing the interests of the client in matters relating to the constitution
                        law, Civil law, Criminal law, Family Law. Her strength lies in lending a patient ear to the
                        clients and going to the root of matter to find a solution. Divya tirelessly engages in
                        researching, drafting, briefing and arguing before the Hon’ble High Court of Punjab & Haryana,
                        District Court Haryana and UT Chandigarh, Consumer Forums, Arbitration matters.
                        A firm believer in determination and hardwork, Divya executes and delivers her work with
                        enthusiasm, ardour and passion.

                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-4">
                    <div class="container">
                        <img class="img-top" src="teamimg/team1.jpg" alt=" " style="width:14rem" height="250rem">

                        <div>
                        </div>
                    </div>
                </div><br>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12 pb-4">
                            <img class="img-top" src="teamimg/team5.jpg" alt="" style="width:14rem" height=250rem>

                        </div>

                        <div class="col-lg-9 col-md-9 col-12 pb-4">
                            <p align="justify">Mehak Sawhney enrolled with the Punjab & Haryana Bar in 2017, an
                                experienced counsel with a comprehensive understanding of Civil, Criminal and Real
                                Estate Laws, Mehak has hands on experience in handling matters with respect to
                                constitutional laws, Civil & Criminal Laws, Revenue laws and Real Estate Laws. She has
                                vast experience in representing clients before Hon’ble Punjab and Haryana High Court,
                                Haryana Real Estate Appellate Tribunal, State consumer Dispute Redressal Forum, District
                                Court of Haryana as well UT Chandigarh, Revenue court of Financial Commissioner, Haryana
                                and Lokayukta Haryana. An alumni of Punjab University Mehak’s understanding of the legal
                                profession is limitless, as a large part of her practise Mehak regularly advises and
                                assists clients on domestic matters as well as family disputes.
                                Mehak is an asset to the organisation as her zeal for the profession is unsurpassed and
                                her courage is unparalleled.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-12 pb-4">
                            <p align="justify">Akash Yadav enrolled with the Bar Council of Punjab & Haryana in the year
                                2020, his enthusiasm for the profession is unparallel.
                                A thorough researcher, Akash posses the art of drafting difficult petitions with ease.
                                He has experience in Constitutional Law, Taxation, Insurance Claims. An alumni of
                                National Law University,
                                Jodhpur Akash seeks and professes that a life without law is no life.
                            </p>

                        </div>
                        <div class="col-lg-3 col-md-3 col-12 pb-4">
                            <div class="container-fulid">
                                <img class="img-top" src="teamimg/team-6.jpg" style="width:14rem" height="250rem">
                            </div>
                        </div>
                    </div>


                    <a href="#areas&expertise" ></a>
    </section><br>



    <section id="team">
        <div class="my-5">
            <div class="py-5">
                <div class="text-dark">
                    <div class=mx-5 class="container">
                        <h2 class="text-center"><u>GLIMPSE @ VIDHI CHAMBERS </u></h2><br>

                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img1.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img4.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img5.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img6.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img7.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img8.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img9.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img10.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img11.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img12.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/team-4.JPG" class="img-fluid pb-4">
                                </div>

                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img13.JPG" class="img-fluid pb-4">
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img14.JPG" class="img-fluid pb-4">
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img19.JPG" class="img-fluid pb-4">
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img16.JPG" class="img-fluid pb-4">
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <img src="blogs/img17.JPG" class="img-fluid pb-4">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#team"></a>
    </section>


    <section class="my-5">
        <div class="py-5">
            <div class="text-dark" bg="dark">

                <div id="appointment request"></div>
                <h1 class="text-center "><u>Appointment </u></h1>
            </div>

            <form method="post">
                <div class="row bg-light text-dark text-bold container-fluid ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <p class="lead"> Make your appointments more easier</p>

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group" class="collapse">
                            <label>Reason for visit</label>

                            <select name="message" class="custom-select mb-3" required>
                                <option selected>Custom Select Menu</option>
                                <option value="real estate">Real estate matter</option>
                                <option value="corporate litigation">corporate litigations</option>
                                <option value="">medical education matter</option>
                                <option value="">education statutory bodies matter</option>
                                <option value="">life & healthy litigation</option>
                                <option value="">telecommunication matter</option>
                                <option value="">corporate & finance matter </option>
                                <option value="">criminal law matter</option>
                                <option value="">service aggrement matter</option>
                                <option value="">family dispute matter</option>
                                <option value="">Tax matter</option>
                                <option value="">commerial matter</option>
                            </select>

                            <div class="form-group">
                                <label>DATE:</label>
                                <input type="date" name="date" autocomplete=" off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Time:</label>
                                <input type="time" name="time" autocomplete=" off" class="form-control">
                            </div>

                        </div>
                        <button class="btn btn-dark" text="center" type="submit" name="save">Submit</button>

                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <img src="new.jpg" style=width:100% height=100%>
                        <div>


                        </div>
                    </div>
            </form>
        </div>
        </div>
        </div>

        <a href="#appointment request"></a>
    </section>

    <section class="my-5">
        <div class="py-5">
            <div class="text-dark">
                <div id="contact" class="container tab-pane active"> </div>
                    <h2 class="text-center "><u> OUR PROMINENT CLIENTS </u></h2><br>
                    <div>
                    </div>
                </div>
            </div>
            <a href="#contact">
                <marquee behavior="scroll" direction="left" scrollamount="10">
                    <img src="clientsimg/11.jpg" width="250" height="150" alt="Natural" />
                    <img src="clientsimg/12.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/17.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/18.jpg" width="380" height="250" alt="Natural" />
                    <img src="clientsimg/19.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/20.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/1.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/2.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/3.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/4.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/5.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/6.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/7.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/8.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/9.jpg" width="300" height="180" alt="Natural" />
                    <img src="clientsimg/10.jpg" width="250" height="150" alt="Natural" />
                    <img src="clientsimg/22.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/23.jpg" width="300" height="150" alt="Natural" />
                    <img src="clientsimg/24.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/25..jpg" width="350" height="280" alt="Natural" />
                    <img src="clientsimg/26.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/27.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/28.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/29.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/30.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/31.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/32.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/33.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/34.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/35.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/36.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/37.jpg" width="180" height="110" alt="Natural" />
                    <img src="clientsimg/38.jpg" width="180" height="110" alt="Natural" />

                </marquee>

        </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-xl-6 mx-5 mt-2 ">
                    <h5 class=" text-uppercase mb-4 font-weight-bold text-white"> VIDHI CHAMBERS</h5>

                    <ul class="list-unstyled text-white text-align-justify">
                        <li class="my-1"><i class="fa fa-home"></i> House No.132, Mansa Devi Complex,
                            Sector 6, Panchkula, Haryana 134109</li>
                        <li class="my-1"><i class="fa fa-phone"></i>0172-464-2766</li>
                    </ul>
                </div>
                  <div class="footer-right">
                <div class=" row-align-items-right">
                    <div class="col-md-10 col-lg-10 mx-5 mt-5">
                        <div class="container-fluid  text-right">
                            <p class="m-0  text-white ">Copyright &copy; 2021 VidhiChambers &copy; all Rights reserved
                            </p>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-google"></a>
                        </div>
                    </div>
                </div>
                </div>
                <style>
                .fa {
                    padding: 15px;
                    font-size: 20px;
                    width: 15px;
                    text-align: center;
                    text-decoration: none;
                    margin: 5px 2px;
                }

                .fa-facebook {
                    background: dark;
                    color: white;
                }

                .fa-google {
                    background: dark;
                    color: white;
                }
                </style>
                <!-- /.container -->
    </footer>
</body>

</html>