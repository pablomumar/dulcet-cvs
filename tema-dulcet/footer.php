<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package dulcet-figmenta
 */

?>



	</div><!-- #content -->

<footer>
    <div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="row double-div">
                    <div class="footer-p col-lg-9 col-md-9">
                        <div>
                            <p><strong style="font-weight: bold">hello@dulcet.it</strong></p>
                            <p>© 2018 Figmenta Srl. / P.iva: 05763330486</p>
                            <p>Ripa di Porta Ticinese, 7, Milano</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="footer-btn col-lg-2 col-md-2">
                        <div class="footer-btn">
                            <div class="footer-contattaci">
                                <a href="<?php echo home_url(); ?>/join/">Contattaci</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
