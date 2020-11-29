<?php include 'form.php'; ?>
<?php include 'header.php'; ?>

    <section id="map" style="background-color: #E8E8E8;border-bottom: solid 2px rgba(163,163,163,1);padding: 0;">
        <div class="container-fluid">
            <div class="row rtl">
                <div class="col text-center p-0"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6901.020745833734!2d31.387526300916054!3d30.13682113412283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDA4JzIwLjkiTiAzMcKwMjMnMzIuMiJF!5e0!3m2!1sen!2seg!4v1606668630741!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
            </div>
        </div>
    </section>
    <section id="contact-form-wrapper" style="background-color: #E8E8E8;border-bottom: solid 2px rgba(163,163,163,1);padding-top: 70px;">
        <div class="container">
            <div class="intro"></div>
            <div class="row rtl">
                <div class="col text-center form-wrapper">
<div id="success_submit" style="padding-bottom:60px;"></div>

<?php echo @$_REQUEST['endFormMessage'];?><?php if(!isset($_REQUEST['endFormMessage']) && $_REQUEST['endFormMessage'] == 0){?>
                    <form class="text-right float-none mx-auto rtl" id="contact-form" method="post" style="max-width: 712px;"><input class="form-control" type="hidden" name="lang" value="arabic">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="form-row row-cols-1 rtl">
                                <div class="col-md-6">
                                    <div class="form-group d-flex"><label for="formRequesterFirstName">الاسم</label><input class="form-control" type="text" id="form_name" name="formRequesterFirstName" required="" placeholder="الاسم الاول">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group d-flex"><label for="formRequesterFirstName">الاسم</label><input class="form-control" type="text" id="form_name" name="formRequesterLastName" required="" placeholder="الاسم الأخير">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group d-flex"><label for="formRequesterMobile">التليفون </label><input class="form-control" type="tel" id="form_phone" name="formRequesterMobile" required="" placeholder="التليفون">
                                        <div class="text-center float-none help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group d-flex"><label for="formRequesterEmail">الايميل</label><input class="form-control" type="email" id="form_email" name="formRequesterEmail" required="" placeholder="البريد الالكتروني">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group d-flex"><label for="formRequesterMessage">الرسالة</label><textarea class="form-control" id="form_message" name="formRequesterMessage" style="color: #333;" placeholder="الرسالة"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center"><button class="btn btn-primary btn-lg border rounded float-none" value="تواصل معنا" type="submit" required="" name="submit" style="background-color: var(--main-color);border-radius: 30px !important;padding: 10px 40px;"><strong>راسلنا</strong><br></button></div>
                        </div>
                    </form>
<script>
_gaq.push(['_trackEvent', 'submit', 'showed', '', 0]);
</script>
<?php } else { ?>
<script>
_gaq.push(['_trackEvent', 'submit', 'clicked', '', 0]);
</script>
<?php } ?>
</div>
            </div>
        </div>
    </section>
    <!--end of content-->
<?php include 'footer.php'; ?>
