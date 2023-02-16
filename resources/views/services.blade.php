@extends('layout')

@section('content')
<div class="subpage-banner">
   <div class="subpage-banner-item" style="">
        <div class="sub-banner-content">
            <h1>Our Services</h1>
        </div>
   </div>
</div>

<div class="page-services">
    <div class="section-sea">
        <div class="container">
            <h2><u>Sea Solution</u></h2>
            <br>
            <div class="row LCL">
                <div class="text-container col-12 col-md-7">
                    <h3>LCL - Less than Container Load</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper sem ut faucibus dignissim. 
                        Nam finibus in lectus ut placerat. Mauris ac metus aliquet, tempor nisl at, dapibus quam. Curabitur purus quam, 
                        rutrum et lectus ultricies, pharetra suscipit diam. Cras euismod felis eget tellus consectetur, 
                        sed venenatis dui sodales. Nunc tincidunt mi felis, vulputate sagittis odio rutrum eget. 
                        Nunc sed aliquet massa. Vestibulum sit amet mauris dolor. Duis dignissim tortor sit amet leo facilisis maximus. 
                        Nullam fermentum ac quam sed cursus. 
                    </p>
                </div>
                <div class="d-flex justify-content-center align-items-center col-12 col-md-5">
                    <div class="img-container">
                        <img class="img-fluid" src="../img/pageservice/LCL1.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/LCL1.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/LCL1.jpg"/>
                    </div>
                </div>
            </div>
            <br>
            <div class="row flex-column-reverse flex-md-row FCL">
                <div class="d-flex justify-content-center align-items-center col-12 col-md-5">
                    <div class="img-container">
                        <img class="img-fluid" src="../img/pageservice/container1.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/container1.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/container1.jpg"/>
                    </div>
                </div>
                <div class="text-container col-12 col-md-7">
                    <h3>FCL - Full Container Load</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper sem ut faucibus dignissim. 
                        Nam finibus in lectus ut placerat. Mauris ac metus aliquet, tempor nisl at, dapibus quam. Curabitur purus quam, 
                        rutrum et lectus ultricies, pharetra suscipit diam. Cras euismod felis eget tellus consectetur, 
                        sed venenatis dui sodales. Nunc tincidunt mi felis, vulputate sagittis odio rutrum eget. 
                        Nunc sed aliquet massa. Vestibulum sit amet mauris dolor. Duis dignissim tortor sit amet leo facilisis maximus. 
                        Nullam fermentum ac quam sed cursus. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-air">
        <div class="container">
            <h2><u>Air Solution</u></h2>
            <br>
            <div class="text-container">
                <h3>Air Export/Import</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper sem ut faucibus dignissim. 
                    Nam finibus in lectus ut placerat. Mauris ac metus aliquet, tempor nisl at, dapibus quam. Curabitur purus quam, 
                    rutrum et lectus ultricies, pharetra suscipit diam. Cras euismod felis eget tellus consectetur, 
                    sed venenatis dui sodales. Nunc tincidunt mi felis, vulputate sagittis odio rutrum eget. 
                    Nunc sed aliquet massa. Vestibulum sit amet mauris dolor. Duis dignissim tortor sit amet leo facilisis maximus. 
                    Nullam fermentum ac quam sed cursus. 
                </p>
            </div>
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-12 col-md-7">
                    <div class="calculateContainer">
                        <h3 class="convertCBMtoWeight">Calculate Volumetric Weight</h3>
                        <div class="row tab">
                            <div class="col-3 tab-items" onclick="calculateChargable(event,'meter')">
                                M <i class="fa-solid fa-arrow-right"></i> WEIGHT
                            </div>
                            <div class="col-3 tab-items" onclick="calculateChargable(event,'cm')">
                                CM <i class="fa-solid fa-arrow-right"></i> WEIGHT
                            </div>
                            <div class="col-3 tab-items" onclick="calculateChargable(event,'cbm')">
                                M3 <i class="fa-solid fa-arrow-right"></i> WEIGHT
                            </div>
                        </div>
                        <div class="calculateField">
                            <div id="meter" class="tabcontent">
                                <label for="length">Length(m):</label>
                                <input type="number" class="input" id="mLength" /> 

                                <br>

                                <label for="width">width(m):</label>
                                <input type="number" class="input" id="mWidth"/> 

                                <br>

                                <label for="height">height(m):</label>
                                <input type="number" class="input" id="mHeight"/> 

                                <br>

                                <button class="btn btn-light text-primary" id="calculatemtoKG">Calculate</button>
                                <p>Volumatric Weight Is: <span id="mtoweight"></span></p>
                            </div>

                            <div id="cm" class="tabcontent">
                                <label for="length">Length(cm):</label>
                                <input type="number" class="input" id="cmLength" /> 
                                <br>
                                <label for="width">width(cm):</label>
                                <input type="number" class="input" id="cmWidth"/> 
                                <br>
                                <label for="height">height(cm):</label>
                                <input type="number" class="input" id="cmHeight"/> 
                                <br>
                                <button class="btn btn-light text-primary" id="calculatecmtoKG" >Calculate</button>
                                <p>Volumatric Weight Is: <span id="cmtoweight"></span></p>
                            </div>

                            <div id="cbm" class="tabcontent">
                                <label for="CBM">CBM(m3):</label>
                                <input type="number" class="input" id="M3"/> 
                                <br>
                                <button class="btn btn-light text-primary" id="calculatem3toKG">Calculate</button>
                                <p>Volumatric Weight Is: <span id="m3toweight"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center col-12 col-md-5 py-4 py-md-0">
                    <div class="img-container">
                        <img class="img-fluid" src="../img/pageservice/aircargo2.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/aircargo2.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/aircargo2.jpg"/>
                    </div>
                </div>
            </div>
            <script>
                function calculateChargable(event,typeOfCalculation){
                var i, tabitems, tabcontent;
                
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i=0;i<tabcontent.length;i++){
                    tabcontent[i].style.cssText="display:none";
                }
                
                tabitems = document.getElementsByClassName("tab-items");
                for (i=0;i<tabitems.length;i++){
                    tabitems[i].className = tabitems[i].className.replace(" active", " "); 
                }

                document.getElementById(typeOfCalculation).style.display = "block";
                event.currentTarget.className += " active";
                };

                function calculateMToWeight(){
                    var a = parseInt(document.getElementById("mLength").value);
                    var b = parseInt(document.getElementById("mWidth").value);
                    var c = parseInt(document.getElementById("mHeight").value);

                    var x = a*b*c;
                    var kgs = x/166.67;
                    document.getElementById("mtoweight").innerHTML = kgs.toFixed(4) + " kgs";
                };

                function calculateCMToWeight(){
                    var a = parseInt(document.getElementById("cmLength").value);
                    var b = parseInt(document.getElementById("cmWidth").value);
                    var c = parseInt(document.getElementById("cmHeight").value);

                    var x = a*b*c;
                    var kgs = x/6000;
                    document.getElementById("cmtoweight").innerHTML = kgs.toFixed(4) + " kgs";
                };

                function calculateM3ToWeight(){
                    var m3 = parseInt(document.getElementById("M3").value);

                    var kgs = m3/166.67;
                    document.getElementById("m3toweight").innerHTML = kgs.toFixed(4) + " kgs";
                }

                document.getElementById("calculatemtoKG").addEventListener("click",calculateMToWeight);
                
                document.getElementById("calculatecmtoKG").addEventListener("click",calculateCMToWeight);

                document.getElementById("calculatem3toKG").addEventListener("click",calculateM3ToWeight);

            </script>
        </div>
    </div>
    
    <div class="section-land">
        <div class="container">
            <h2><u>Land Trucking</u></h2>
            <br>
            <div class="row">
                <div class="text-container col-12 col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper sem ut faucibus dignissim. 
                        Nam finibus in lectus ut placerat. Mauris ac metus aliquet, tempor nisl at, dapibus quam. Curabitur purus quam, 
                        rutrum et lectus ultricies, pharetra suscipit diam. Cras euismod felis eget tellus consectetur, 
                        sed venenatis dui sodales. Nunc tincidunt mi felis, vulputate sagittis odio rutrum eget. 
                        Nunc sed aliquet massa. Vestibulum sit amet mauris dolor. Duis dignissim tortor sit amet leo facilisis maximus. 
                        Nullam fermentum ac quam sed cursus. 
                    </p>
                </div>
                <div class="d-flex justify-content-center align-items-center col-12 col-md-6">
                    <div class="img-container">
                        <img class="img-fluid" src="../img/pageservice/40fttruck.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/40fttruck.jpg"/>
                        <img class="img-fluid" src="../img/pageservice/40fttruck.jpg"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-costestimate">
        <div class="container">
            <div class="text-container row text-center">
                <div class="col-12">
                    <h3>Share Us Your Requirements & Ask For The Best Quote From Our Sales Team Now! <i class="fa-solid fa-heart"></i></h3> 
                </div>
                <div class="col-12">
                    <a class="btn btn-primary btn-lg mx-1" href="mailto:<?php echo str_replace(" ","", $config["contact"]["email"]) ?>">
                        <i class="fa-solid fa-envelope"></i> Email Us
                    </a>
                    <a class="btn btn-primary btn-lg mx-1" href="tel:<?php echo str_replace(" ","", $config["contact"]["office"]) ?>">
                        <i class="fas fa-phone-alt"> </i> Call Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_style')
<style>

</style>
@endsection