   <!-- REQUIRED SCRIPTS -->
   <!-- jQuery -->
   <script src="./assets/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="./assets/dist/js/adminlte.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="./assets/dist/js/demo.js"></script>
   <script type="text/javascript">
   //Javascript query to disable the unchecked button, in other words, when you vote a candidate, the other button automatically disables.
       $(document).ready(function() {
           $(".pres").on("change", function() {
               if ($(".pres:checked").length == 1) {
                   $(".pres").attr("disabled", "disabled");
                   $(".pres:checked").removeAttr("disabled");
               } else {
                   $(".pres").removeAttr("disabled");
               }
           });

           $(".vp").on("change", function() {
               if ($(".vp:checked").length == 1) {
                   $(".vp").attr("disabled", "disabled");
                   $(".vp:checked").removeAttr("disabled");
               } else {
                   $(".vp").removeAttr("disabled");
               }
           });

           $(".sec_gen").on("change", function() {
               if ($(".sec_gen:checked").length == 1) {
                   $(".sec_gen").attr("disabled", "disabled");
                   $(".sec_gen:checked").removeAttr("disabled");
               } else {
                   $(".sec_gen").removeAttr("disabled");
               }
           });

           $(".assistant_sec_gen").on("change", function() {
               if ($(".assistant_sec_gen:checked").length == 1) {
                   $(".assistant_sec_gen").attr("disabled", "disabled");
                   $(".assistant_sec_gen:checked").removeAttr("disabled");
               } else {
                   $(".assistant_sec_gen").removeAttr("disabled");
               }
           });

           $(".fin_sec").on("change", function() {
               if ($(".fin_sec:checked").length == 1) {
                   $(".fin_sec").attr("disabled", "disabled");
                   $(".fin_sec:checked").removeAttr("disabled");
               } else {
                   $(".fin_sec").removeAttr("disabled");
               }
           });

           $(".treasurer").on("change", function() {
               if ($(".treasurer:checked").length == 1) {
                   $(".treasurer").attr("disabled", "disabled");
                   $(".treasurer:checked").removeAttr("disabled");
               } else {
                   $(".treasurer").removeAttr("disabled");
               }
           });

           $(".socials").on("change", function() {
               if ($(".socials:checked").length == 1) {
                   $(".socials").attr("disabled", "disabled");
                   $(".socials:checked").removeAttr("disabled");
               } else {
                   $(".socials").removeAttr("disabled");
               }
           });
           $(".health").on("change", function() {
               if ($(".health:checked").length == 1) {
                   $(".health").attr("disabled", "disabled");
                   $(".health:checked").removeAttr("disabled");
               } else {
                   $(".health").removeAttr("disabled");
               }
           });
           $(".research").on("change", function() {
               if ($(".research:checked").length == 1) {
                   $(".research").attr("disabled", "disabled");
                   $(".research:checked").removeAttr("disabled");
               } else {
                   $(".research").removeAttr("disabled");
               }
           });
           $(".sports").on("change", function() {
               if ($(".sports:checked").length == 1) {
                   $(".sports").attr("disabled", "disabled");
                   $(".sports:checked").removeAttr("disabled");
               } else {
                   $(".sports").removeAttr("disabled");
               }
           });

           $(".pro").on("change", function() {
               if ($(".pro:checked").length == 1) {
                   $(".pro").attr("disabled", "disabled");
                   $(".pro:checked").removeAttr("disabled");
               } else {
                   $(".pro").removeAttr("disabled");
               }
           });

           $(".provost").on("change", function() {
               if ($(".provost:checked").length == 1) {
                   $(".provost").attr("disabled", "disabled");
                   $(".provost:checked").removeAttr("disabled");
               } else {
                   $(".provost").removeAttr("disabled");
               }
           });

       });
   </script>