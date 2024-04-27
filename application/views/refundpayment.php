<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Payment Tab Widget Flat Responsive Widget Template :: w3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Payment Tab Widget a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>payment/css/style.css" type="text/css" media="all">
    <!-- easy-responsive-tabs css -->
    <link rel="stylesheet" href="<?php echo base_url();?>payment/css/easy-responsive-tabs.css" type="text/css" media="all" />
    <link href="/<?php echo base_url();?>payment/fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

</head>

<body>
    <h1 class="title-agile text-center">Payment Tab Widget</h1>
    <div class="w3ls-main">
        <!--/tabs-->
        <div class="responsive_tabs w3ls_tab">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Credit/Debit</li>
                    <li>Net Banking</li>
                    <li>Paypal Account</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--tab_one-->
                    <div class="tab1">
                        <div class="agile_pay">
                            <form action="<?php echo base_url();?>Welcome/refund_payment_process" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <input type="hidden" name="complaintid" value="<?php echo $complaintid;?>">
                            <input type="hidden" name="amount" value="<?php echo $amount;?>">
                            <input type="hidden" name="exportid" value="<?php echo $exportid;?>">
                                <section class="creditly-wrapper payf_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Name on Card</label>
                                                <input class="billing-address-name form-control" type="text" name="noc" placeholder="John Smith">
                                            </div>
                                            <div class="paymntf_card_number_grids">
                                                <div class="fpay_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Card Number</label>
                                                        <input class="number credit-card-number form-control" type="text" name="cardno" inputmode="numeric" autocomplete="cc-number"
                                                            autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="fpay_card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">CVV</label>
                                                        <input class="security-code form-control" Â· inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Expiration Date</label>
                                                <input class="expiration-month-and-year form-control" type="text" name="expiredate" placeholder="MM / YY">
                                            </div>
                                        </div>
                                        <!-- <button class="submit">
                                            <span>Make payment </span>
                                        </button> -->
                                        <input type="submit" value="Make Payment" class="btn btn-success">
                                    </div>
                                </section>
                            </form>

                        </div>
                    </div>
                    <!-- //tab one -->
                    <!-- tab two -->
                    <div class="tab2">
                        <div class="agile_pay">
                            <div class="vertical_post">
                                <form action="#" method="post">
                                    <h2>Select From Popular Banks</h2>
                                    <div class="swit-radio">
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label>
                                                    <input type="radio" name="radio" checked="">
                                                    <i></i>Syndicate Bank</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <i></i>Bank of Baroda</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <i></i>Canara Bank</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <i></i>ICICI Bank</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <i></i>State Bank Of India</label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <h3> select other bank</h3>
                                    <div class="section_room_pay">
                                        <select class="year">
                                            <option value="">=== Other Banks ===</option>
                                            <option value="ALB-NA">Allahabad Bank NetBanking</option>
                                            <option value="ADB-NA">Andhra Bank</option>
                                            <option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
                                            <option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
                                            <option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
                                            <option value="BOI-NA">Bank of India NetBanking</option>
                                            <option value="BOM-NA">Bank of Maharashtra NetBanking</option>
                                            <option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
                                            <option value="CBI-NA">Central Bank of India</option>
                                            <option value="CUB-NA">City Union Bank NetBanking</option>
                                            <option value="CRP-NA">Corporation Bank</option>
                                            <option value="DBK-NA">Deutsche Bank NetBanking</option>
                                            <option value="DCB-NA">Development Credit Bank</option>
                                            <option value="DC2-NA">Development Credit Bank - Corporate</option>
                                            <option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
                                            <option value="FBK-NA">Federal Bank NetBanking</option>
                                            <option value="IDS-NA">Indusind Bank NetBanking</option>
                                            <option value="IOB-NA">Indian Overseas Bank</option>
                                            <option value="ING-NA">ING Vysya Bank (now Kotak)</option>
                                            <option value="JKB-NA">Jammu and Kashmir NetBanking</option>
                                            <option value="JSB-NA">Janata Sahakari Bank Limited</option>
                                            <option value="KBL-NA">Karnataka Bank NetBanking</option>
                                            <option value="KVB-NA">Karur Vysya Bank NetBanking</option>
                                            <option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
                                            <option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
                                            <option value="CPN-NA">PNB Corporate NetBanking</option>
                                            <option value="PNB-NA">PNB NetBanking</option>
                                            <option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option>
                                            <option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
                                            <option value="SWB-NA">Saraswat Bank NetBanking</option>
                                            <option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
                                            <option value="SBH-NA">SB Hyderabad NetBanking</option>
                                            <option value="SBM-NA">SB Mysore NetBanking</option>
                                            <option value="SBT-NA">SB Travancore NetBanking</option>
                                            <option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
                                            <option value="SIB-NA">South Indian Bank NetBanking</option>
                                            <option value="SBP-NA">State Bank of Patiala NetBanking</option>
                                            <option value="SYD-NA">Syndicate Bank NetBanking</option>
                                            <option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option>
                                            <option value="UCO-NA">UCO Bank NetBanking</option>
                                            <option value="UBI-NA">Union Bank NetBanking</option>
                                            <option value="UNI-NA">United Bank of India NetBanking</option>
                                            <option value="VJB-NA">Vijaya Bank NetBanking</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Pay now">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //tab two -->
                    <!-- tab three -->
                    <div class="tab3">
                        <div class="agile_pay">
                            <div class=" tab-grid">
                                <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                                <a href="#" class="btn btn-primary">Checkout via Paypal</a>
                            </div>
                            <div class="paypal_agile">
                                <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                    <section class="creditly-wrapper payf_wrapper">
                                        <div class="credit-card-wrapper">
                                            <div class="first-row form-group">
                                                <div class="controls">
                                                    <label class="control-label">Card Holder </label>
                                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                </div>
                                                <div class="paymntf_card_number_grids">
                                                    <div class="fpay_card_number_grid_left">
                                                        <div class="controls">
                                                            <label class="control-label">Card Number</label>
                                                            <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                                autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                        </div>
                                                    </div>
                                                    <div class="fpay_card_number_grid_right">
                                                        <div class="controls">
                                                            <label class="control-label">CVV</label>
                                                            <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                        </div>
                                                    </div>
                                                    <div class="clear"> </div>
                                                </div>
                                                <div class="controls">
                                                    <label class="control-label">Valid Thru</label>
                                                    <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                </div>
                                            </div>
                                            <input class="btn btn-primary submit" type="submit" value="Proceed Payment">
                                        </div>
                                    </section>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- //tab three -->
                </div>
            </div>
        </div>
        <!--//tabs-->
    </div>
    <!-- //payment -->
    <!-- Common js -->
    <script type="text/javascript" src="<?php echo base_url();?>payment/js/jquery-2.2.3.min.js"></script>
    <!--// Common js -->
    <!-- easy-responsive-tabs -->
    <script src="<?php echo base_url();?>payment/js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //easy-responsive-tabs -->
    <!-- credit-card -->
    <script src="<?php echo base_url();?>payment/js/creditly.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>payment/css/creditly.css" type="text/css" media="all" />
    <script>
        $(function () {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function (e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>
    <!-- //credit-card -->
    <div class="copy-wthree text-center">
        <p>© 2018 Payment Tab Widget. All Rights Reserved | Design by
            <a href="<?php echo base_url();?>payment/http://w3layouts.com/" target="_blank">W3layouts</a>
        </p>
    </div>
</body>
<!-- //Body -->

</html>