<section id="contact-us" class="pa-contact-us" data-parallax="scroll" data-speed="0"
         data-image-src="assets/images/contact-hero.jpg">

    <div class="container">
        <!-- Section Header -->
        <div class="row text-center">
            <div class="col-12 col-xl-10 offset-xl-1">
                <h1 class="pa-h1-v2 pa-bright fadeInDelay00Duration10" style="color: white">
                    <strong><?php if($_SESSION['lan'] == 'EN') echo 'Contact Us'; else echo '聯絡我們';?></strong></h1>
                <div class="pt-0 pt-sm-3 pt-md-3 pt-lg-4 pt-xl-5"></div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-md-6 col-xl-5 offset-xl-1 pa-contact-info d-flex">
                <div class="pa-glass pa-left">
                    <h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong><?php if($_SESSION['lan'] == 'EN') echo 'Le Guardien Family Office'; else echo '嘉兆 家族辦公室';?></strong></h1>
                    <p class="pa-p-v1 pa-white fadeInDelay06Duration10" style="color: white"><span><?php if($_SESSION['lan'] == 'EN') echo 'Telephone'; else echo '電話';?>:</span>(+852) 2850 3643</p>
                    <p class="pa-p-v1 pa-white fadeInDelay10Duration10" style="color: white"><span><?php if($_SESSION['lan'] == 'EN') echo 'Email'; else echo '電子郵件';?>: </span>leguardienfamilyoffice@gmail.com</p>
                    <p class="pa-p-v1 pa-white fadeInDelay10Duration10" style="color: white"><span><?php if($_SESSION['lan'] == 'EN') echo 'Address'; else echo '地址';?>：</span><?php if($_SESSION['lan'] == 'EN') echo '10/F, Devon House, Taikoo Place, 979 King\'s Road, Quarry Bay, Hong Kong'; else echo '香港鰂魚涌英皇道979號 太古坊德宏大廈10樓';?></p>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-12 col-md-6 col-xl-5 pa-contact-form d-flex justify-content-end">
                <div class="pa-glass pa-right">
                    <h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong><?php if ($_SESSION['lan'] == 'EN') echo 'Send us a message'; else echo '發送訊息給我們';?></strong></h1>

                    <!-- Preview Only Static Form -->
                    <form>
                        <div class="form-group">
                            <label for="the_name"><?php if($_SESSION['lan'] == 'EN') echo 'Name'; else echo '姓名';?></label>
                            <input type="text" name="the_name" id="the_name" tabindex="1">
                        </div>
                        <div class="form-group">
                            <label for="the_email"><?php if($_SESSION['lan'] == 'EN') echo 'E-Mail'; else echo '電子郵件';?></label>
                            <input type="email" name="the_email" id="the_email" tabindex="2">
                        </div>
                        <div class="form-group">
                            <label for="the_message"><?php if($_SESSION['lan'] == 'EN') echo 'Message'; else echo '訊息';?></label>
                            <textarea name="the_message" id="the_message" tabindex="3"></textarea>
                        </div>
                        <button type="submit" class="pa-hvr-sweep-to-right" tabindex="4"><?php if($_SESSION['lan'] == 'EN') echo 'Submit'; else echo '提交';?></button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>