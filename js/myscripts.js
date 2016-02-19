// Onclick toggle show/hide <Div>div>
function toggle(n) {
   $("[id*=panel]").not("#panel"+n).slideUp();
   $("#panel"+n).slideToggle("slow");
}


// Roll over change image
function roll(img_name, img_src) {
        document[img_name].src=img_src;
}


// Active Navigation Links Main Navigation
$("#nav ul li a").click(function() {                // when clicking any of these links
    $("#nav ul li a").removeClass("youarehere");    // remove highlight from all links
    $(this).addClass("youarehere");                 // add highlight to clicked link
})

// Active Navigation Links Mobile Navigation
$("#sidr ul li a").click(function() {                // when clicking any of these links
    $("#sidr ul li a").removeClass("youarehere");    // remove highlight from all links
    $(this).addClass("youarehere");                 // add highlight to clicked link
})