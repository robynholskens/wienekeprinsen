$(".priceTitle").click(function () {
     $header = $(this);
    $content = $header.next();
    if($header.css('background-color') == 'rgb(214, 238, 242)') {
                    $header.css('background-color','white');
                    $content.css('background-color','rgb(214,238,242)');
                    $content.css('border-color','rgb(214,238,242)');
                }
                else {
                    $header.css('background-color','rgb(214,238,242)');
                    $content.css('border-color','rgb(255,255,255)');
                    $content.css('background-color','rgb(255,255,255)');
                    
                }
     $min = $header.children(':first-child');
            $min.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "+" : "-";
            return $content.is(":visible") ? "-" : "+";
        });



    //getting the next element
   
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(400);

});