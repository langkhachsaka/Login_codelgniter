<head>
    <meta charset="UTF-8">
    <title>Layout</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <script language="JavaScript" src="<?php echo base_url('assets/css/script_tab.js'); ?>"></script>
</head>
<body>
<header>
    <div class="wrapper">
        <div class="header">
            <a href="#"><img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="logo"/></a>

            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">PORTFOLIO</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">FEATURES</a></li>
                    <li><a href="<?php echo base_url('user/user_logout');?>">Logout</a></li>

                </ul>x`
            </nav>
            <tr>
                <form>
                    <td>
                        <input type="text"
                               style=" width: 128px;border: 1px;height: 25px; margin-top:5px;padding: 0px;margin-left: 820px;position: relative;border-radius: 3px">
                    </td>
                    <td>

                        <input type="submit" value=""
                               style="border-style: none;float: right; margin-right: -20px;background: url('<?php echo base_url(); ?>assets/images/search.png') no-repeat; width: 33px; height: 55px;margin-top: -65px">
                    </td>
                </form>
            </tr>
        </div>
    </div>
    <div class="header_copy">
        <h1>FERITA</h1>
        <p><a href="#">Home</a> / <a href="#">Features</a></p>
    </div>
</header>
<!--slide 1-->
<div id="slide">
    <img name="slide" width="100%" height="100%">
</div>
<!--slide2-->
<div id="slide2">
    <div id="slide2_left">
        <img name="slide2" width="100%" height="100%">
    </div>
    <div id="slide2_right"><img name="slide3" width="100%" height="120px">

        <h4>SLIDEBAR GALLERY</h4>
        <img src="<?php echo base_url(); ?>assets/images/slide1.jpg" height="40" width="70" vspace="7px" hspace="5px"/>
        <img src="<?php echo base_url(); ?>assets/images/slide2.jpg" height="40" width="70" vspace="7px" hspace="5px"/>
        <img src="<?php echo base_url(); ?>assets/images/slide3.jpg" height="40" width="70" vspace="7px" hspace="5px"/>
        <img src="<?php echo base_url(); ?>assets/images/slide4.jpg" height="40" width="70" vspace="7px" hspace="5px"/>
        <img src="<?php echo base_url(); ?>assets/images/slide.jpg" height="40" width="70" vspace="7px" hspace="5px"/>
        <img src="<?php echo base_url(); ?>assets/images/slide3.jpg" height="40 " width="70" vspace="7px" hspace="5px"/>
    </div>
</div>
<!--content1-->
<div id="content">
    <div class="wrapper">
        <ul>
            <li class="content-1">
                <h4>Hello</h4>
                <p>It's necessary to credit the author.</p>
                <a href="#" class="button-1">read more</a>
            </li>
            <li class="content-1">
                <h4>Layered PSD</h4>
                <p>It's necessary to credit the author.</p>
                <a href="#" class="button-1">read more</a>
            </li>
            <li class="content-1">
                <h4>Ready to Go</h4>
                <p>It's necessary to credit the author.</p>
                <a href="#" class="button-1">read more</a>
            </li>
            <li class="content-1">
                <h4>Ready to Go</h4>
                <p>It's necessary to credit the author.</p>
                <a href="#" class="button-1">read more</a>
            </li>
            <div class="clear"></div>
        </ul>
    </div>
</div>
<!--content2-->
<div id="content2">
    <div id="content2_left">
        <button type="button" class="accordion"><b>Simple collapsible</b></button>
        <div class="panel">
            <p> consequat.</p>
        </div>
        <button type="button" class="accordion"><b>Simple collapsible</b></button>
        <div class="panel">
            <p> ex ea commodo consequat.</p>
        </div>
        <button type="button" class="accordion"><b>Simple collapsible</b></button>
        <div class="panel">
            <p> ex ea commodo consequat.</p>
        </div>
    </div>
    <div id="content2_right">
        <button type="button" class="accordion"><b>Simple collapsible</b></button>
        <div class="panel">
            <p> consequat.</p>
        </div>
        <button type="button" class="accordion"><b>Simple collapsible</b></button>
        <div class="panel">
            <p> ex ea commodo consequat.</p>
        </div>
        <button type="button" class="accordion"><b>Simple collapsible</b></button>
        <div class="panel">
            <p> ex ea commodo consequat.</p>
        </div>
    </div>
</div>
<!--js tab-->
<div id="tab">
    <div id="tab_left">
        <div class="tab">
            <button class="tablinks" onclick="opentab(event, 'tab.')">TAB TITLE</button>
            <button class="tablinks" onclick="opentab(event, 'tab1')">TAB TITLE</button>
            <button class="tablinks" onclick="opentab(event, 'tab2')">TAB TITLE</button>
            <button class="tablinks" onclick="opentab(event, 'tab3')">TAB TITLE</button>
        </div>
        ​
        <div id="tab." class="tabcontent">
            <p>Test0<img src="<?php echo base_url(); ?>assets/images/girl.png" height="80px" width="120px"
                         style="float: right"/></p>
        </div>
        <div id="tab1" class="tabcontent">
            <p>Test.<img src="<?php echo base_url(); ?>assets/images/girl.png" height="80px" width="120px"
                         style="float: right"/></p>
        </div>
        ​
        <div id="tab2" class="tabcontent">
            <p>Test 1<img src="<?php echo base_url(); ?>assets/images/girl.png" height="80px" width="120px"
                          style="float: right"/></p>
        </div>
        ​
        <div id="tab3" class="tabcontent">
            <p>Test 2<img src="<?php echo base_url(); ?>assets/images/girl.png" height="80px" width="120px"
                          style="float: right"/></p>
        </div>
        ​
    </div>
    <div id="tab_right">
        <div class="tab">
            <button class="tablinks" onclick="opentab(event, 'tab4')">TAB TITLE</button>
            <button class="tablinks" onclick="opentab(event, 'tab5')">TAB TITLE</button>
        </div>
        ​
        <div id="tab4" class="tabcontent">
            <p>Test.</p>
        </div>
        <div id="tab5" class="tabcontent">
            <p>Test 1.</p>
        </div>
    </div>
</div>
<div id="images">
    <div id="images_top">
        <img src="<?php echo base_url(); ?>assets/images/slide1.jpg" height="200" width="210" vspace="14" hspace="4"/>
        <img src="<?php echo base_url(); ?>assets/images/slide2.jpg" height="200" width="210" vspace="14" hspace="4"/>
        <img src="<?php echo base_url(); ?>assets/images/slide3.jpg" height="200" width="210" vspace="14" hspace="10"/>
        <img src="<?php echo base_url(); ?>assets/images/slide4.jpg" height="200" width="210" vspace="14"/>

    </div>
    <div id="images_bottom">
        <img src="<?php echo base_url(); ?>assets/images/slide2.jpg" height="200" width="437"/>
        <img src="<?php echo base_url(); ?>assets/images/slide3.jpg" id="img" height="200" width="435"/>
    </div>
</div>
<hr width="69%" size="2px" align="center" color="666666"/>
<div class="text">
    <div>
        <h4>Headlin</h4>
        <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của chính
            thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
    </div>
    <div id="text1">
        <h4>Headlin</h4>
        <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của chính
            thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
    </div>
    <div id="text2">
        <h4>Headlin</h4>
        <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của chính
            thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
    </div>
    <div id="hang3">
        <div id="text3">
            <h4>Headlin</h4>
            <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của
                chính
                thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
        </div>
        <div id="text4">
            <h4>Headlin</h4>
            <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của
                chính
                thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
        </div>
    </div>
    <div id="hang5">
        <div id="text5">
            <h4>Headlin</h4>
            <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của
                chính
                thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
        </div>
        <div id="text6">
            <h4>Headlin</h4>
            <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của
                chính
                thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
        </div>
        <div id="text7">
            <h4>Headlin</h4>
            <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của
                chính
                thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
        </div>
        <div id="text8">
            <h4>Headlin</h4>
            <p>Margin là khoảng cách giữa thẻ đó và các thẻ bên cạnh khác, còn padding là khoảng cách từ nội dung của
                chính
                thẻ đó và đường viền của nó. Do vậy để tạo khoảng cách cho phần văn bản với bức ảnh</p>
        </div>
    </div>
</div>
<hr width="69%" size="2px" align="center" color="666666"/>
<div class="list-link">
    <div id="link">
        <ul class="list1">
            <h3><b>LIST</b></h3>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
        </ul>

        <ul class="list1">
            <h3><b>LIST</b></h3>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
        </ul>
        <ul class="list1">
            <h3><b>LIST</b></h3>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
        </ul>
        <ul class="list1">
            <h3><b>LIST</b></h3>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
            <li><a href="#">Phần văn bản với bức ảnh </a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<hr width="69%" size="2px" align="center" color="666666"/>
<div class="view_more">
    <h2>Headline</h2>
    <p>A fixed element does not leave a gap in the page where it would normally have been located.</p>
    <a href="#" class="button"><b>VIEW MORE</b> </a>
</div>
<div class="table">
    <div>
        <table id="table_1">
            <tr>
                <th width="211">Margin</th>
                <th width="239">Margin</th>
                <th width="230">Margin</th>
                <th width="237">Margin</th>
            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
            </tr>
        </table>
    </div>
    <div id="table_bottom" style="float: left; height: 300px; margin-top: 40px">
        <table width="100px" id="table_2" style="float: left">
            <tr>
                <th width="200">Margin</th>
                <th width="200">Margin</th>
                <th width="200">Margin</th>
            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>

            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>

            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>

            </tr>
        </table>
        <table width="100px" id="table_3" style="float: right">
            <tr>
                <th width="200">Margin</th>
                <th width="200">Margin</th>
                <th width="200">Margin</th>
            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>

            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>

            </tr>
            <tr>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>
                <td>khoảng cách giữa thẻ đó và các thẻ bên cạnh khác</td>

            </tr>
        </table>
    </div>
</div>
<footer>
    <div class="footer">
        <div id="footer_top">
            <div id="footer_top_info1">
                <img src="<?php echo base_url(); ?>assets/images/logo.jpg" style="margin-left: 59px;margin-top:-10px"
                     title="logo"/><br>
                <br>
                <p><b>2014 CompanyName. All rights reservedCopyright 2014 CompanyName. All rights reserved.Copyright
                        2014 CompanyName. All rights reserved.</b></p><br>
                <br>
                <br>
                <p><b>Phone: </b><span style="font-size: 20px">01699807884</span></p><br>
                <p><b>Email: </b><span style="font-size: 20px">info@modu.vn</span></p>
            </div>
            <div id="footer_top_info2">
                <ul>
                    <h1 style="color: black"><b>Company</b></h1>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                </ul>
                <ul>
                    <h1 style="color: black"><b>Company</b></h1>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                    <li><a href="#"> A fixed </a></li>
                </ul>
            </div>
            <div id="footer_top_info3">
                <h2>from the <b>BLOG</b></h2>
                <p><img src="<?php echo base_url(); ?>assets/images/girl.png" style="width: 50px ; margin-right: 20px">A
                    fixed element does not leave a
                    gap in the page where it would normally have been located</p>
                <p><img src="<?php echo base_url(); ?>assets/images/girl.png" style="width: 50px ; margin-right: 20px">A
                    fixed element does not leave a
                    gap in the page where it would normally have been located</p>
            </div>
        </div>
        <div id="footer_bottom">
            <p style="float: left; margin-left: 235px; margin-top: 50px; color: white">2013 ModusVersus</p>
            <div id="linkbottom">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
            </div>
        </div>
    </div>

</footer>