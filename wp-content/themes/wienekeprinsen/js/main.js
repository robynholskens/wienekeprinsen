$(".priceTitle").click(function () {
     $header = $(this);
    $content = $header.next();
    if($header.css('background-color') == 'rgb(214, 238, 242)') {
                    $header.css('background-color','white');
                    $content.css('background-color','rgb(214,238,242)');
                }
                else {
                    $header.css('background-color','rgb(214,238,242)');
                    $content.css('background-color','rgb(255,255,255)');
                    
                }



    //getting the next element
    $min = $header.children(':first-child');
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
                                    $min.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "-" : "+";
            
        });
                         
                         });

});