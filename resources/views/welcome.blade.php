<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Annie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href = "{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type = "text/css" href = "{{ asset('css/font-awesome.css')}}">
    <link rel = "stylesheet" href = "{{ asset('css/main.css')}}">
    <script src="https://use.typekit.net/nax5cff.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
    <div class = "container">
        <div class ="row mt-4 mb-4">
            <div class = "col-md-4">
                <!--Visible on medium display and up only-->
                <div class="card d-none d-md-block">
                    <img class="card-img-top" src = "{{ asset('images/annie_portrait.png') }}" alt="annie">
                    <div class="card-body">
                        <h2 class = "card-title text-center display-4 tk-mr-eaves-xl-modern">Annie Le, RN</h2>
                        <p class = "card-text contact"><i class = "fa fa-envelope-o fa-lg"></i>&nbsp;anniele1907[at]gmail[dot]com</p>
                    </div>
                </div>
            </div>
            <div class = "col-md-8 col-xs-12">
                <!--Visible on portrait phone only and hidden on all-->
                <div class="card mb-3 d-block d-sm-none">
                    <img class="card-img-top" src = "{{ asset('images/annie_portrait.png') }}" alt="annie">
                    <div class="card-body">
                        <h2 class = "card-title text-center display-3 tk-mr-eaves-xl-modern">Annie Le, RN, PHN</h2>
                        <p class = "card-text contact"><i class = "fa fa-envelope-o fa-lg d-none d-sm-block"></i>&nbsp;anniele1907[at]gmail[dot]co</p>
                    </div>
                </div>
                <div class = "card sky-background">
                    <div class = "card-body">
                
                        <p class = "card-text">Annie is an aspiring nurse
                            who recently completed her nursing associate degree in December 2017 and passed an NCLEX examination in March 2018.
                            She was an honor student who had devoted a lot of time toward her education while maintaining a full time job.
                            She wishes to apply her earned skills and knowledge to assist her employers in many capacities.</p>
                        <p class = "card-text">
                    <h4 class = "tk-nimbus-sans"><i class = "fa fa-certificate fa-lg"></i>&nbsp;Licensure and Certitications</h4>
                    <hr>
                    <div class = "row justify-content-between">
                        <div class = "col-8">
                            <h6>Public Health Nurse, California Board of Nursing</h6>
                        </div>
                        <div class = "col-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Jul. 2021</h6>
                            </div>
                            
                        </div>


                    </div>
                    <div class = "row justify-content-between mt-3">
                        <div class = "col-8">
                            <h6>Registered Nurse, California Board of Nursing</h6>
                        </div>
                        <div class = "col-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Oct. 2019</h6>
                            </div>
                            
                        </div>


                    </div>
                    <div class = "row justify-content-between mt-3">
                        <div class = "col-md-6">
                            <h6>BSL Certification</h6>
                        </div>
                        <div class = "col-md-6">
                            <div class = "float-right">
                                <h6 class = "time-text">Jan. 2019</h6>
                            </div>
                            
                        </div>
    

                    </div>
                    <div class = "row justify-content-between mt-3">
                        <div class = "col-md-10">
                            <h6>L.A. Hospital Fire and Life Safety Certification, UCLA-Olive View Hospital</h6>
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Feb. 2020</h6>
                            </div>
                            
                        </div>
    

                    </div>
                    <div class = "row justify-content-between mt-3">
                        <div class = "col-10">
                            <h6>Management of Assaultive Behavior Certification</h6>
                        </div>
                        <div class = "col-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Pending Renewal</h6>
                            </div>
                            
                        </div>
    

                    </div>
                </p>
                <p class = "card-text">
                    <h4 class = "tk-nimbus-sans"><i class = "fa fa-graduation-cap fa-lg"></i>&nbsp; Education</h4>
                    <hr>
                    <div class = "row justify-content-between">
                        <div class = "col-7">
                            <h5>United States University </h5>
                            <p>Family Nurse Practioner</p>
                        </div>
                        <div class = "col-5">
                            <div class = "float-right">
                                <h6 class = "time-text">Expected Graduation Dec. 2021</h6>
                            </div>

                        </div>
                    </div>
                    <div class = "row justify-content-between">
                        <div class = "col-7">
                            <h5>University of Phoenix </h5>
                            <p>Bachelor of Nursing</p>
                            <ul>
                                <li>Current GPA: <span class = "text-danger">3.8</span></li>
                            </ul>
                        </div>
                        <div class = "col-5">
                            <div class = "float-right">
                                <h6 class = "time-text">Sept.2017 - Jul. 2018</h6>
                            </div>

                        </div>
                    </div>
                    <div class = "row justify-content-between mt-3">
                        <div class = "col-8">
                            <h5>Los Angeles Valley College, California </h5>
                            <p>Associate of Nursing</p>
                            <ul>
                                <li>GPA: <span class = "text-danger">3.69</span></li>
                                <li>Dean's Honor List: Fall 2016
                            </ul>
                        </div>
                        <div class = "col-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Jan. 2015 - Dec. 2017</h6>
                            </div>

                        </div>


                    </div>
                    <div class = "row justify-content-between mt-3">
                        <div class = "col-8">
                            <h5>Los Angeles Pierce College, California </h5>
                            <ul>
                                <li>President's Honor List: 3 semesters</li>
                                <li>Dean's Honor List: 5 semesters</li>
                            </ul>
                        </div>
                        <div class = "col-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Aug. 2010 - Dec. 2013</h6>
                            </div>

                        </div>
                    </div>
                </p>

                <p class = "card-text">
                    <h4 class = "tk-nimbus-sans"><i class = "fa fa-trophy fa-lg"></i>&nbsp; Scholarships</h4>
                    <hr>
                    <div class = "row">
                        <div class = "col-md-10">
                            <h6>Vicky Chang and Family Scholarship Program</h6>
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Dec. 2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-md-10">
                            <h6>Michael D. Antonovich RN Student Scholarship, County of Los Angeles Department of Health</h6>
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Oct. 2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class = "row mt-3">
                        <div class = "col-md-10">
                            <h6>Deloras Jones RN Scholarship Program, Scholarship America</h6>
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Nov. 2016</h6>
                            </div>
                        </div>
                    </div>
                <p>
                <p class = "card-text">
                    <h4 class = "tk-nimbus-sans"><i class = "fa fa-heart fa-lg"></i>&nbsp;Clinical Experience</h4>
                    <hr>
                    <div class = "row justify-content-between">
                        <div class = "col-md-8">
                            <h6>Valley Presbyterian Hospital, Los Angeles</h6>
                            <p>Position: Student Nurse</p>
                        </div>
                        <div class = "col-md-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Fall 2017, Fall 2016, Spring 2016</h6>
                            </div>
                            
                        </div>

                    </div>
                    <div class = "row justify-content-between">
                        <div class = "col-md-8">
                            <h6>Northridge Hospital Medical Center, Los Angeles</h6>
                            <p>Position: Student Nurse</p>
                            <!-- <ul>
                                <li>Job</li>
                                <li>Job</li>
                            </ul> -->
                        </div>
                        <div class = "col-md-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Fall 2017</h6>
                            </div>
                            
                        </div>
                    </div>
                    <div class = "row justify-content-between">
                        <div class = "col-md-10">
                            <h6>Kaiser Permanente West Los Angeles Medical Center, Los Angeles</h6>
                            <p>Position: Student Nurse</p>
                            <!-- <ul>
                                <li>Job</li>
                                <li>Job</li>
                            </ul> -->
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Fall 2016</h6>
                            </div>
                            
                        </div>
                    </div>
                    <div class = "row justify-content-between">
                        <div class = "col-md-10">
                            <h6>Kaiser Permanente Panorama City Medical Center, Los Angeles</h6>
                            <p>Position: Student Nurse</p>
                            <!-- <ul>
                                <li>Job</li>
                                <li>Job</li>
                            </ul> -->
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Fall 2016</h6>
                            </div>
                            
                        </div>
                    </div>
                    <div class = "row justify-content-between">
                        <div class = "col-md-10">
                            <h6>Motion Picture & Television Country House and Hospital, Los Angeles</h6>
                            <p>Position: Student Nurse</p>
                            <!-- <ul>
                                <li>Job</li>
                                <li>Job</li>
                            </ul> -->
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Fall 2016</h6>
                            </div>
                        </div>
                    </div>
                    <div class = "row justify-content-between">
                        <div class = "col-md-10">
                            <h6>Gateways Hospital and Mental Health Center, Los Angeles</h6>
                            <p>Position: Student Nurse</p>
                            <!-- <ul>
                                <li>Job</li>
                                <li>Job</li>
                            </ul> -->
                        </div>
                        <div class = "col-md-2">
                            <div class = "float-right">
                                <h6 class = "time-text">Fall 2016</h6>
                            </div>
                        </div>
                    </div>
        
                </p>
                <p class = "card-text">
                    <h4 class = "tk-nimbus-sans"><i class = "fa fa-briefcase fa-lg"></i>&nbsp;Work Experience</h4>
                    <hr>
                    <div class = "row justify-content-between">
                        <div class = "col-md-8">
                            <h6>Los Angeles County + USC Medical Center </h6>
                            <p>Pediatric Registered Nurse I</p>
                            <ul>
                                <li>Provides individualized and specialized nursing care to children</li>
                                <li>Observes patient's response to interventions and treatments and monitors for side effects of medication administration.</li>
                            </ul>
                        </div>
                        <div class = "col-md-4">
                            <div class = "float-right">
                                <h6 class = "time-text">July. 2018 to Present</span></h6>
                            </div>
                            
                        </div>
                        <div class = "col-md-8">
                            <h6>Sugar Nails, Los Angeles</h6>
                            <p>Manicurist Technician</p>
                            <ul>
                                <li>Delivers top-notch nail care services to clients</li>
                                <li>Supports safety and health procedures for clients</li>
                            </ul>
                        </div>
                        <div class = "col-md-4">
                            <div class = "float-right">
                                <h6 class = "time-text">Nov. 2013 to 2018</span></h6>
                            </div>
                            
                        </div>

                    </div>
                </p>
            </div>
        </div>
            </div>
        </div>
        
        

    </div>
    
    <footer class = "container-fluid">
        <div class = "row justify-content-center carbon-background">
            <div class = "col-md-4 col-xs-4 text-center">
                <p class = "tk-mr-eaves-xl-modern mt-4">
                    Designed by <a href = "http://thaiqnguyen.com" target="_blank">Thai Nguyen</a>
                </p>
            </div>
            
        </div>
        
    </footer>
    
    

<script src = "{{ asset('js/main.js')}}"></script>

</body>
</html>