/*tabs*/
    $(".tab_content").hide();
        if(location.hash != "") {
            var target = "#"+location.hash.split("#")[1]; // need semicolon at end of line
            $(location.hash).hidden(); //Show first tab content
            $("ul.tabs li:has(a[href="+target+"])").addClass("active").show();
            rotateTabs=false;
        } else {
            $("ul.tabs li:eq(0)").addClass("active").show(); //Activate first tab
            $(".tab_content:eq(0), .tab_content_interno:eq(0)").show(); //Show first tab content
    }

    
    $(".tab_content_interno").hide();
        if(location.hash != "") {
            var target = "#"+location.hash.split("#")[1]; // need semicolon at end of line
            $(location.hash).hidden(); //Show first tab content
            $("ul.tabs-interno li:has(a[href="+target+"])").addClass("active").show();
            rotateTabs=false;
        } else {
            $("ul.tabs-interno li:eq(0)").addClass("active").show(); //Activate first tab
            $(".tab_content_interno:eq(0)").show(); //Show first tab content
    }

    $(".tab_content_interno2").hide();
        if(location.hash != "") {
            var target = "#"+location.hash.split("#")[1]; // need semicolon at end of line
            $(location.hash).hidden(); //Show first tab content
            $("ul.tabs-interno2 li:has(a[href="+target+"])").addClass("active").show();
            rotateTabs=false;
        } else {
            $("ul.tabs-interno2 li:eq(0)").addClass("active").show(); //Activate first tab
            $(".tab_content_interno2:eq(0)").show(); //Show first tab content
    }


    $("ul.tabs-interno li").click(function() {
        $("ul.tabs-interno li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content_interno").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false
    });

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false
    });

     $("ul.tabs-interno2 li").click(function() {
        $("ul.tabs-interno2 li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content_interno2").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false
    });

    /*colorbox*/
    $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel:'group1'});

        $('.non-retina').colorbox({rel:'group5', transition:'none'})
        $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
        
        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function(){ 
            $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
            return false;
        });
    });

    $(".alinha li:nth-child(4n), #biblioteqa-professor ul li:nth-child(3n), .menu-list li:nth-child(3n)").addClass("sem");