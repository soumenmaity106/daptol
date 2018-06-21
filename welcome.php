<?php

/**
* Template Name: Welcome template
*
*/

get_header();
?>



<!-- Top Bar -->
<nav class="top_navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="navbar-logo">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory(); ?>\assets/images/logo.svg" width="30" alt="InfiniO"><span class="m-l-10">InfiniO</span></a>
                </div>
                
            </div>
        </div>        
    </div>
</nav>

<aside id="leftsidebar" class="sidebar h_menu">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN</li>
                        <li class="active open"> <a href="index.html"><i class="icon-speedometer"></i><span>Campaign stats</span></a></li>
                                     
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <div class="slim_scroll">
        <div class="card">
            <h6>Skins</h6>
            <ul class="choose-skin list-unstyled">
                <li data-theme="purple" class="active">
                    <div class="purple"></div>
                </li>                   
                <li data-theme="blue">
                    <div class="blue"></div>
                </li>
                <li data-theme="cyan">
                    <div class="cyan"></div>
                </li>
                <li data-theme="green">
                    <div class="green"></div>
                </li>
                <li data-theme="orange">
                    <div class="orange"></div>
                </li>
                <li data-theme="blush">
                    <div class="blush"></div>
                </li>
            </ul>
        </div>
        <div class="card theme-light-dark">
            <h6>Left Menu</h6>
            <button class="btn btn-default btn-block btn-round btn-simple t-light">Light</button>
            <button class="btn btn-default btn-block btn-round t-dark">Dark</button>
        </div> 
        <div class="card">
            <h6>General Settings</h6>
            <ul class="setting-list list-unstyled">
                <li>
                    <div class="checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">Report Panel Usage</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">Email Redirect</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox3" type="checkbox" checked="">
                        <label for="checkbox3">Notifications</label>
                    </div>                        
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox4" type="checkbox" checked="">
                        <label for="checkbox4">Auto Updates</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox5" type="checkbox" checked="">
                        <label for="checkbox5">Offline</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox6" type="checkbox" checked="">
                        <label for="checkbox6">Location Permission</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Name of the campaign here</h2>
                                
                            </div>            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
             <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                        </div>
                        <div class="content">
                            <div class="text">Pageviews</div>
                            <div class="number count-to" data-from="0" data-to="457512" data-speed="2000" data-fresh-interval="700">457512</div>
                        </div>
                    </div>
                </div>
            </div>
			
           
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <span class="chart chart-line">3,4,6,5,6,4,7,9</span>
                        </div>
                        <div class="content">
                            <div class="text">SEO</div>                            
                            <div class="number"><span>6/10 df links</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                        </div>
                        <div class="content">
                            <div class="text">CPC</div>
                            <div class="number">$<span>0.76</span></div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-pie">30, 35, 25, 8</div>
                        </div>
                        <div class="content">
                            <div class="text">Avg time on page</div>
                            <div class="number"><span>2:45m</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        
        <div class="row clearfix">
            
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Published</strong> Links <small>in this campaign</small></h2>
                       
                    </div>
                    <div class="body">
                        <ul class="follow_us list-unstyled m-b-0">                            
                           <li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">http://www.designyourway.net/blog/resources/best-free-fonts-for-logos-72-modern-and-creative-typefaces/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://www.engadget.com/2018/06/10/tesla-will-start-enabling-full-self-driving-features-in-august/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://thenextweb.com/tech/2018/06/15/this-dutch-town-uses-high-tech-streetlights-to-keep-their-bats-happy/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>	
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://techcrunch.com/2018/06/14/app-maker-googles-low-code-tool-for-building-business-apps-comes-out-of-beta/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://mashable.com/2018/06/15/good-dog-waiting-cafe/?utm_cid=hp-hh-sec</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://www.engadget.com/2018/06/15/instagram-screenshot-stories-notification/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">http://www.designyourway.net/blog/resources/best-free-fonts-for-logos-72-modern-and-creative-typefaces/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">http://www.designyourway.net/blog/resources/best-free-fonts-for-logos-72-modern-and-creative-typefaces/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>	
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://techcrunch.com/2018/06/14/app-maker-googles-low-code-tool-for-building-business-apps-comes-out-of-beta/</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>
							<li class="online">
                                <a href="#">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                          
                                            <span class="message">https://mashable.com/2018/06/15/good-dog-waiting-cafe/?utm_cid=hp-hh-sec</span>
                                           
                                        </div>
                                    </div>
                                </a>                            
                            </li>							
                        </ul>
                    </div>                    
                </div>                
            </div>
            
			<div class="col-lg-8 col-md-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Top</strong> visits</h2>
                    </div>
                    <div class="body">
                        <div class="row">                            
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div id="world-map-markers" class="jvector-map"></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="table-responsive">                                   
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>Country</th>
                                                <th>Visits</th>
                                                
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>USA</td>
                                                <td>2,009</td>
                                           
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>1,129</td>
                                              
                                           
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>2,009</td>
                                     
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>954</td>
                                                
                                              
                                            </tr>
                                            <tr>
                                                <td>Germany</td>
                                                <td>594</td>
                                             
                                            
                                            </tr>
                                            <tr>
                                                <td>UK</td>
                                                <td>1,500</td>
                                                
                                          
                                            </tr>
                                            <tr>
                                                <td>Romania</td>
                                                <td>4,236</td>
                                                
                                           
                                            </tr>                                            											
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
        </div>
        
       
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card active-bg">
                    <div class="body">
                        <p class="copyright m-b-0 text-white">Copyright 2018 © ABC Company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();

?>