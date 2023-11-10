$(document).ready(function(){ 

    $( ".contact_me" ).on( "click", function() {
        $("#contact").addClass("focus_shadow");
        setTimeout(() => {
            $("#contact").removeClass("focus_shadow").animate(500); 
        }, 3500);
    })

   
    $( ".open_menu" ).on( "click", function() {
        $( ".open_menu" ).hide('slow');
        $( ".close_menu" ).show('slow');
        $( ".menu" ).show('slow');
        
    } );

    $( ".close_menu" ).on( "click", function() {
        $( ".close_menu" ).hide('slow');
        $( ".open_menu" ).show('slow');
        $( ".menu" ).hide('slow');
        
    } );

    $( ".collapse_content .fa-plus" ).on( "click", function(){
            var project_card = $(this).parent().parent();
            var project_info_data = project_card.find( "p" ).html();
            var project_info_html = $('<div>').addClass('project_infos_mobile_view');
            $(this).hide();
            $( this).parent().find('.fa-minus').show();
            // $( ".collapse_content .fa-minus" ).show();
            project_card.after(project_info_html);
            
            // var project_info_html = project_card.next(".project_infos_mobile_view");
            // console.log(project_info_html);
            project_info_html.html(project_info_data);
            project_info_html.slideDown();
    })

    $( ".collapse_content .fa-minus" ).on( "click", function(){
        $(this).hide();
        $( this).parent().find('.fa-plus').show();
        $(this).parent().parent().next(".project_infos_mobile_view").slideUp().setTimeout(() => {
            $('.project_infos_mobile_view').remove();
        }, 2000);
    })


    
   
   

    var screenWidth = window.innerWidth;
    if (screenWidth < 1200) {
        // Get all div elements with a specific class
        var divList = document.querySelectorAll('.project_card');
        // Loop through each div element using forEach
        divList.forEach(element => {
            var anchorElement = element.querySelector('a');
            if (anchorElement) {
                var hrefValue = anchorElement.getAttribute('href');
                console.log(hrefValue);
                var collapseContent = element.querySelector('.collapse_content');
                var project_link_mobile_view = document.createElement('a');
                project_link_mobile_view.href = hrefValue;
                project_link_mobile_view.innerHTML = '<i class="fa-solid fa-arrow-up-right-from-square"></i>';
                project_link_mobile_view.classList.add('project_link_mobile_view');
                collapseContent.insertAdjacentElement('afterend', project_link_mobile_view);
            }
            
        });
        
        $( ".menu" ).on( "click", function() {
            $( ".close_menu" ).hide('slow');
            $( ".open_menu" ).show('slow');
            $( ".menu" ).hide('slow');
        } );


    }
    

        
  });



