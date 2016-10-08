<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>SL-Transport Board</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                      
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <?php
                include ("config/header.php")
            ?>
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Template</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                        <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-6">                        
                            <!-- START GOOGLE WORLD MAP -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Google World Map</h3>
                                </div>
                                <div class="panel-body panel-body-map">
                                    <div id="google_world_map" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END GOOGLE WORLD MAP-->
                        </div>                                        
                        <div class="col-md-6">                        
                            <!-- START GOOGLE EUROPE MAP -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Google Europe Map</h3>
                                </div>
                                <div class="panel-body panel-body-map">
                                    <div id="google_eu_map" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END GOOGLE EUROPE MAP -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">                        
                            <!-- START GOOGLE MAP WITH MARKER -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Google Map With Markers</h3>
                                </div>
                                <div class="panel-body panel-body-map">
                                    <div id="google_ptm_map" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END GOOGLE MAP WITH MARKER -->
                        </div>                                        
                        <div class="col-md-6">                        

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Google Map Search</h3>
                                    <div class="pull-right" style="width: 200px;">
                                        <input type="text" id="target" class="form-control"/>
                                    </div>                                
                                </div>
                                <div class="panel-body panel-body-map">
                                    <div id="google_search_map" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">                        
                            <!-- START jVectorMap World -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">jVectorMap World</h3>
                                    <div class="pull-right" style="width: 200px;">
                                        <input type="text" class="form-control" placeholder="Select country" id="vector_world_map_value"/>
                                    </div>                                
                                </div>
                                <div class="panel-body panel-body-map">
                                    <div id="vector_world_map" style="width: 100%; height: 300px"></div>
                                </div>
                            </div>
                            <!-- END jVectorMap World -->
                        </div>               
                    </div>
                    
                        
                        </div>
                    </div>
                    
                </div>
                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                      

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>






