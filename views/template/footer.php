<footer id="footer" class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l12 s12">
        <h5 class="white-text ">Footer</h5>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container left-align">
      © 2017 Copyright Leila
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>



<script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/materialize.js"></script>
<script src="../assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.collapsible').collapsible();
});
</script>
<!-- <script type="text/javascript">
$('.collapsible').collapsible({
accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
});
</script> -->
<script type="text/javascript">
// Open
$('.collapsible').collapsible('open', 0);
// Close
$('.collapsible').collapsible('close', 0);
// Destroy
$('.collapsible').collapsible('destroy');
</script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='https://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>
</body>
</html>
