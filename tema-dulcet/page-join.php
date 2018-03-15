<?php

/*
    Template Name: Join
*/

get_header();

?>

<div class="join-cont-all">

    <!-- Span Buttons -->
    <div class="main-span-cont">
        <div class="span-cont">
            <span class="span-button" data-target="#influencer" data-backdrop="static" data-keyboard="true" data-toggle="modal">Sei un Influencer?</span>
        </div>
        <div class="span-cont">
            <span class="span-button" data-target="#brand" data-backdrop="static" data-keyboard="true" data-toggle="modal">Sei un brand?</span>
        </div>
    </div>
    <!-- !Span Buttons -->

    <!-- Modal Influencer -->
    <div class="modal fade" id="influencer" tabindex="-1" role="dialog" aria-labelledby="influencerLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content custom-modal">

                <!-- Modal Body -->
                <div class="modal-body" style="position: relative;">
                    <form autocomplete="on" action="" method="POST" onsubmit="">
                        <div class="field-list clear">

                            <input type="hidden" id="influencer-submission_id" value=''>
                            <fieldset class="form-item fields name required">
                                <div class="form-title">Name <span class="required">*</span></div>
                                <legend>Name</legend>
                                <button type="button" class="close custom-btn" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>

                                <div class="field first-name">
                                    <label class="caption"><input class="field-element field-control" name="fname"
                                                                  x-autocompletetype="name" type="text"
                                                                  spellcheck="false"
                                                                  maxlength="30"
                                                                  data-title="First" />
                                        First Name</label>
                                </div>
                                <div class="field last-name">
                                    <label class="caption"><input class="field-element field-control" name="lname"
                                                                  x-autocompletetype="surname" type="text"
                                                                  spellcheck="false" maxlength="30" data-title="Last" />
                                        Last Name</label>
                                </div>
                            </fieldset>

                            <div id="influencer-email" class="form-item field email required">
                                <label class="form-title" for="influencer-email-field">Email Address <span class="required">*</span></label>

                                <input class="field-element" name="email" x-autocompletetype="email" type="text" spellcheck="false" id="influencer-email-field" />
                            </div>

                            <div id="influencer-subject" class="form-item field text required">
                                <label class="form-title" for="influencer-subject-field">Subject <span class="required">*</span></label>

                                <input class="field-element text" type="text" id="influencer-subject-field" />
                            </div>

                            <div id="influencer-message" class="form-item field textarea required">
                                <label class="form-title" for="influencer-message-field">Message <span class="required">*</span></label>

                                <textarea class="field-element " id="influencer-message-field" ></textarea>
                            </div>

                            <div id="influencer-instagram" class="form-item field website">
                                <label class="form-title" for="influencer-instagram-field">Instagram</label>

                                <input class="field-element" type="text" id="influencer-instagram-field" spellcheck="false" />
                                <div class="prefix">http://</div>
                            </div>
                        </div>
                        <div class="form-button-wrapper form-button-wrapper--align-left modal-footer">
                            <input class="button" type="submit" value="Submit"/>
                        </div>
                    </form>

                </div>
                <!-- ! Modal Body -->


                <!-- Modal Footer -->
                <div class="hidden form-submission-text">Thank you!</div>
                <div class="hidden form-submission-html" data-submission-html=""></div>
                <!-- ! Modal Footer -->

            </div>
        </div>
    </div>

    <!-- Modal Brand -->
    <div class="modal fade" id="brand" tabindex="-1" role="dialog" aria-labelledby="brandLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content custom-modal">

                <!-- Modal Body -->
                <div class="modal-body" style="position: relative;">
                    <form autocomplete="on" action="<?php echo home_url();?>/brand-submit-form.php" method="POST" onsubmit="getPseudoRandomString()">

                            <div class="field-list clear">

                                <input type="hidden" id="brand-submission_id" value=''>
                                <fieldset id="name-surname" class="form-item fields name required">
                                    <div class="form-title">Name <span class="required">*</span></div>
                                    <legend>Name</legend>
                                    <button type="button" class="close custom-btn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>

                                    <div class="field first-name">
                                        <label class="caption">
                                            <input class="field-element field-control" name="brand-name-field" x-autocompletetype="given-name" type="text" spellcheck="false" maxlength="30" data-title="First" id="brand-name-field"/>
                                            First Name</label>
                                    </div>
                                    <div class="field last-name">
                                        <label class="caption">
                                            <input class="field-element field-control" name="brand-surname-field" x-autocompletetype="surname" type="text" spellcheck="false" maxlength="30" data-title="Last" id="brand-surname-field"/>
                                            Last Name</label>
                                    </div>
                                </fieldset>

                                <div id="brand-email" class="form-item field email required">
                                    <label class="form-title" for="brand-email-field">Email Address <span class="required">*</span></label>

                                    <input class="field-element" name="brand-email-field" x-autocompletetype="email" type="text" spellcheck="false" id="brand-email-field" />
                                </div>

                                <div id="brand-subject" class="form-item field text required">
                                    <label class="form-title" for="brand-subject-field">Subject <span class="required">*</span></label>

                                    <input class="field-element text" name="brand-subject-field" type="text" id="brand-subject-field" />
                                </div>

                                <div id="brand-message" class="form-item field textarea required">
                                    <label class="form-title" for="brand-message-field">Message <span class="required">*</span></label>

                                    <textarea class="field-element" name="brand-message-field" id="brand-message-field" ></textarea>
                                </div>

                            </div>
                            <div class="form-button-wrapper form-button-wrapper--align-left modal-footer">
                                <input class="button" type="submit" value="Submit"/>
                            </div>
                        </form>


                </div>
                <!-- ! Modal Body -->


                <!-- Modal Footer -->
                <div class="hidden form-submission-text">Thank you!</div>
                <div class="hidden form-submission-html" data-submission-html=""></div>
                <!-- ! Modal Footer -->
            </div>
        </div>
    </div>

    <!-- Rest -->
    <div class="join-main-cont">
        <div class="join-cont-img">
            <img src="<?php echo get_template_directory_uri();?>/images/join-content-img.png" alt="">
        </div>
        <div class="join-text-cont">
            <div class="join-title-cont">
                <p class="join-title"> Siamo a Milano in Ripa di Porta Ticinese 7</p>
            </div>
            <p class="join-text">spinoff della digital marketing agency <a href="https://figmenta.com/">Figmenta</a>.</p>
        </div>
    </div>
    <div class="join-spacer"></div>
    <!-- !Rest -->

</div>

<?php get_footer(); ?>