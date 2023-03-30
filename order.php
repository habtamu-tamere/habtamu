
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>JobFair</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/f1.jpg" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    a{cursor: pointer;
    }
    .btn {
    border-radius: 40px;
    background: #18d26e;
    border: 0;
    padding: 3px 24px;
    color: #fff;
    transition: 0.4s;
    margin: 10px 10px 10px 10px;
    cursor: pointer;

    }
</style>
</head>

<body>
    <main id="main">
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Order Your CV Here</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="new-tab" data-toggle="tab" href="#new" role="tab"
                                        aria-controls="new" aria-expanded="true">Create New CV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="update-tab" data-toggle="tab" href="#update" role="tab"
                                        aria-controls="update">Update Your CV</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="new" aria-labelledby="new-tab">
                                <hr>
                                <form enctype="multipart/form-data" action="orderCV.php" method="post">
                                    <input type="hidden" name="type" id="type" value="Regular">
                                    <input type="hidden" name="cv" id="cv" value="New">
                                    <h5>BASIC INFORMATION</h5>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="name">Your Full Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="telephone">Telephone:</label>
                                            <input type="telephone" class="form-control" id="telephone" name="telephone" required></div>
                                        <div class="col-sm-6 form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"></div>
                                    </div>
                                    <!--Add Field-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <div class="wrapper_edu">
                                                <h5>EDUCATION/TRAININGS</h5>
                                                <div>
                                                   <select class="form-control" name="edu1[]" required>
                                                                        <option value="">Select Education level</option>
                                                                        <option value="none">None</option>
                                                                        <option value="Elementary">Elementary</option>
                                                                        <option value="Secondary School">Secondary School</option>
                                                                        <option value="certificate">Certificate</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Degree">Degree</option>
                                                                        <option value="MSc">Msc</option>
                                                                        <option value="PHD">PHD</option>
                                                                        <option value="Other">Other</option>
                                                    </select><br>
                                                    <input type="text" name="school[]" placeholder="Institution Name" class="form-control"/><br>
                                                            <select name="year[]" id="form-control" class="form-control">
                                                                        <option value="" disabled selected>-Select Graduation Year-</option>
                                                                        <option value=1990>1990</option>
                                                                    <option value=1991>1991</option>
                                                                    <option value=1992>1992</option>
                                                                    <option value=1993>1993</option>
                                                                    <option value=1994>1994</option>
                                                                    <option value=1995>1995</option>
                                                                    <option value=1996>1996</option>
                                                                    <option value=1997>1997</option>
                                                                    <option value=1998>1998</option>
                                                                    <option value=1999>1999</option>
                                                                    <option value=2000>2000</option>
                                                                    <option value=2001>2001</option>
                                                                    <option value=2002>2002</option>
                                                                    <option value=2003>2003</option>
                                                                    <option value=2004>2004</option>
                                                                    <option value=2005>2005</option>
                                                                    <option value=2006>2006</option>
                                                                    <option value=2007>2007</option>
                                                                    <option value=2008>2008</option>
                                                                    <option value=2009>2009</option>
                                                                    <option value=2010>2010</option>
                                                                    <option value=2011>2011</option>
                                                                    <option value=2012>2012</option>
                                                                    <option value=2013>2013</option>
                                                                    <option value=2014>2014</option>
                                                                    <option value=2015>2015</option>
                                                                    <option value=2016>2016</option>
                                                                    <option value=2017>2017</option>
                                                                    <option value=2018>2018</option>
                                                                    <option value=2019>2019</option>
                                                                    <option value=2020>2020</option>
                                                                                                                                </select><br>
                                                            <textarea class="form-control" type="textarea" name="add[]" id="add" maxlength="1500" rows="2" placeholder="Describe yourself in a few words. i.e passions, strength , hobbies and interests,"></textarea>
                                                </div>
                                            </div><br>
                                            <a class="add_edu">Add Education</a>
                                            <hr></div>
                                        <div class="col-sm-6 form-group">
                                            <div class="wrapper_exp">
                                                <h5>EXPERIENCE</h5>
                                                <div>
                                                    <input type="text" placeholder="Organization Name" class="form-control" name="org[]" id="org"><br>
                                                    <input type="text" placeholder="Position" class="form-control" name="position[]" id="position"><br>
                                                    <input type="text" class="form-control" name="exp[]" placeholder="Enter duration of Employment"><br>
                                                    <textarea class="form-control" type="textarea" name="role[]" id="role" maxlength="1500" rows="2" placeholder="Describe your roles and responsibilities"></textarea>
                                                </div>
                                            </div><br>
                                            <a class="add_exp">Add Experience</a>
                                            <hr></div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class="wrapper_doc">
                                                
                                            </div>
                                            <a class="add_doc">Add Document or Photo Shoot</a>
                                            <hr></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 form-group">

                                            <input type="submit" name="submit" id="submit" value="SEND"
                                                class="btn btn-lg btn-default pull-right"></div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">
                                <hr>
                                <form enctype="multipart/form-data" action="orderCV.php"
                                    method="post">
                                    <input type="hidden" name="type" id="type" value="Regular">
                                    <input type="hidden" name="cv" id="cv" value="Update">
                                    <h5>BASIC INFORMATION</h5>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="name">Your Full Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" required></div>
                                        <div class="col-sm-6 form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="telephone">Telephone:</label>
                                            <input type="telephone" class="form-control" id="telephone" name="telephone"
                                                required></div>
                                    </div>
                                    <h5>DOCUMENTATION</h5>
                                    
                                  <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class="wrapper_doc">
                                                
                                            </div>
                                            <a class="add_doc">Add Document or Photo Shoot</a>
                                            <hr></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 form-group">

                                            <input type="submit" name="submit" id="submit" value="SEND"
                                                class="btn btn-lg btn-default pull-right"></div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row portfolio-container"></div>
            </section>

        </main>

        <!--==========================
    Footer
  ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-info">
                            <h3>JobFair</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>JobFair</strong>
                . All Rights Reserved
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <!--File Adder-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
//Add Input Fields
$(document).ready(function() {
    var max_fields = 10; //Maximum allowed input fields 
    var wrapper    = $(".wrapper"); //Input fields wrapper

    var wrapper_edu    = $(".wrapper_edu"); //Input fields wrapper
    var wrapper_exp    = $(".wrapper_exp"); //Input fields wrapper
    var wrapper_doc    = $(".wrapper_doc"); //Input fields wrapper


    var add_button = $(".add_fields"); //Add button class or ID

    var add_Edu = $(".add_edu"); //Add button class or ID
    var add_Exp = $(".add_exp"); //Add button class or ID
    var add_Doc = $(".add_doc"); //Add button class or ID

    

    var x = 1; //Initlal input field is set to 1
    


        //When user click on add input button
    $(add_Edu).click(function(e){
        e.preventDefault();
        //Check maximum allowed input fields
        if(x < max_fields){ 
            x++; //input field increment
             //add input field
            $(wrapper_edu).append('<br><br><div><select class="form-control" name="edu1[]" required><option value="">Select Education level</option><option value="Elementary">Elementary</option><option value="Secondary School">Secondary School</option><option value="certificate">Certificate</option><option value="Diploma">Diploma</option><option value="Degree">Degree</option><option value="MSc">Msc</option><option value="PHD">PHD</option><option value="Other">Other</option></select><input type="text" name="school[]" placeholder="Inistuation Name" class="form-control"/><select name="year[]" id="form-control" class="form-control" required ><option value="" disabled selected>-Select Graduation Year-</option><option value=1990>1990</option><option value=1991>1991</option><option value=1992>1992</option><option value=1993>1993</option><option value=1994>1994</option><option value=1995>1995</option><option value=1996>1996</option><option value=1997>1997</option><option value=1998>1998</option><option value=1999>1999</option><option value=2000>2000</option><option value=2001>2001</option><option value=2002>2002</option><option value=2003>2003</option><option value=2004>2004</option><option value=2005>2005</option><option value=2006>2006</option><option value=2007>2007</option><option value=2008>2008</option><option value=2009>2009</option><option value=2010>2010</option><option value=2011>2011</option><option value=2012>2012</option><option value=2013>2013</option><option value=2014>2014</option><option value=2015>2015</option><option value=2016>2016</option><option value=2017>2017</option><option value=2018>2018</option><option value=2019>2019</option><option value=2020>2020</option></select><textarea class="form-control" type="textarea" name="add[]" id="add" maxlength="1500" rows="2" placeholder="Type Additional Information"></textarea><br><a href="javascript:void(0);" class="remove_field">Remove</a><hr></div>');
        }
    });    //When user click on add input button

    $(add_Exp).click(function(e){
        e.preventDefault();
        //Check maximum allowed input fields
        if(x < max_fields){ 
            x++; //input field increment
             //add input field
            $(wrapper_exp).append('<br><br><div><input type="text" placeholder="Organization Name" class="form-control" name="org[]" id="org" required><input type="text" placeholder="Position" class="form-control" name="position[]" id="position" required><input type="text" class="form-control" name="exp[]" placeholder="Enter your Expriance time" required><textarea class="form-control" type="textarea" name="exp-add[]" id="exp-add" maxlength="1500" rows="2" placeholder="Describe your role"></textarea><br><a href="javascript:void(0);" class="remove_field">Remove</a><hr></div>');
        }
    });

        $(add_Doc).click(function(e){
        e.preventDefault();
        //Check maximum allowed input fields
        if(x < max_fields){ 
            x++; //input field increment
             //add input field
            $(wrapper_doc).append('<br><br><div><input type="file" class="form-control" name="csv_file[]" id="csv_file[]" required><br><a href="javascript:void(0);" class="remove_field">Remove</a><hr></div>');
        }
    });
    
    //when user click on remove button
    $(wrapper_edu).on("click",".remove_field", function(e){ 
        e.preventDefault();
        $(this).parent('div').remove(); //remove inout field
        x--; //inout field decrement
    })

        //when user click on remove button
    $(wrapper_exp).on("click",".remove_field", function(e){ 
        e.preventDefault();
        $(this).parent('div').remove(); //remove inout field
        x--; //inout field decrement
    })

            //when user click on remove button
    $(wrapper_doc).on("click",".remove_field", function(e){ 
        e.preventDefault();
        $(this).parent('div').remove(); //remove inout field
        x--; //inout field decrement
    })


});
</script>

</body>

</html>