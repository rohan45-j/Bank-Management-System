<nav class="navbar navbar-expand-lg navbar-dark text-light">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-flex justify-content-center text-center" id="navbarSupportedContent">
                    <a class="btn btn-primary me-2" href="./" role="button"><i class="fas fa-home"></i> Home</a>
                    <a class="btn btn-danger me-2" href="./?p=announcements" role="button"><i class="fas fa-bullhorn"></i> Announcements</a>
                    <a class="btn btn-success me-2" href="./?p=about" role="button"><i class="far fa-address-card"></i> About</a>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>