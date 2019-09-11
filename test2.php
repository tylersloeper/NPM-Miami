<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Slider - Vertical range slider</title>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>


<style>
body {
    padding: 1em;
}
.collapse {
    display: none;
}
.glyphicon {
    cursor: pointer;
}
</style>
</head>
<body>
<a href="" class="show-form btn btn-primary" data-target="t1">tab 1</a>
<a href="" class="show-form btn btn-primary" data-target='t2'>tab 2</a>
<a href="" class="show-form btn btn-primary" data-target='t3'>tab 3</a>
<a href="" class="show-form btn btn-primary" data-target='t4'>tab 4</a>
<a href="" class="show-form btn btn-primary" data-target='t5'>tab 5</a>
<a href="" class="show-form btn btn-primary" data-target='t6'>tab 6</a>
<div class="collapse" data-target='t1'>
    <p>1 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>
<div class="collapse" data-target='t2'>
    <p>2 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>
<div class="collapse" data-target='t3'>
    <p>3 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>

<div class="collapse" data-target='t4'>
    <p>3 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>

<div class="collapse" data-target='t5'>
    <p>3 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>


<div class="collapse" data-target='t3'>
    <p>3 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>
<script>
  $('.show-form').on('click', function (event){
    event.preventDefault();
    var elem = $(this); //writing $(this) every time is bad
    var target = $('div[data-target="'+elem.attr("data-target")+'"]');

    if(elem.hasClass('active')){
        //remove from this
        elem.removeClass("active");
        //close box
        target.slideUp("slow");
    } else { //toggle menu when clicking on some other link
        //remove from everywhere
        $('.show-form').removeClass('active');
        //slide every box up
        $('.collapse').slideUp("slow");
        //add to this only
        elem.addClass('active');
        //slide associated box down
        target.slideDown("slow");
    }
});
</script>

</body>
</html>
