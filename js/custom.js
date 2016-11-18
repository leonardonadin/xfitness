
window.onload = (function() {
    $("#form_submit").off("click").on("click", function(){
      $("form").submit();
    });
})();
