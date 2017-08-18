$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#bf7400', '#91B10A', '#2AA0C8', '#65188B', '#E25428', '#763274'],
				anchors: ['introduction', 'plan', 'design', 'develop', 'market', 'connect',],
				menu: '#menu',
        verticalCentered: false,
		scrollBar: false,
        navigation: true,  
		showActiveTooltip : true,		
		scrollingSpeed: 900,
		navigationPosition: 'right',
		navigationTooltips: ['introdution', 'plan', 'design', 'develop', 'market', 'connect'],
        afterLoad: function(anchorLink, index){
            if(anchorLink == 'introduction'){
                $('.skillbar').each(function(){
                  $(this).find('.skillbar-bar').animate({
                    width:$(this).attr('data-percent')
                  },2000);
                });
            }
        },
        onLeave: function(index, nextIndex, direction) {
          if(index == 2){
            $('.skillbar-bar').css('width','0px');
          }
        }
        
			});
  
   
		    
      $('.worksimg').hover(function(){
              $(this).css({borderColor: '#FF8376', borderStyle: 'solid'}).animate({
                opacity: '1',
                borderWidth: '5px'
              }, 100);
              }, function(){
                $(this).css({borderColor: '#FF8376', borderStyle: 'solid'}).animate({
                opacity: '0.7',
                borderWidth: '0'  
              }, 100);
         }); //hover
         
		});
