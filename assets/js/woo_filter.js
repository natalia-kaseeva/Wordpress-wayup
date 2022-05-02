jQuery(function($)
{

	if($('.wayup_sortby').length) {
		var minprice=$('.wayup_sortby').data('minprice');
		var maxprice=$('.wayup_sortby').data('maxprice');
		var maximum=maxprice+(maxprice*0.2);

		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: maximum,
			values: [ minprice, maxprice ],
			step: 5,
			slide: function( event, ui ) {
				$( "#priceMin" ).val( ui.values[ 0 ]);
				$( "#priceMax" ).val( ui.values[ 1 ]);
			},
			stop:function(event,ui){
				wayup_get_posts();
			}
		});
		$( "#priceMin" ).val( $( "#slider-range" ).slider( "values", 0 ));
		$( "#priceMax" ).val( $( "#slider-range" ).slider( "values", 1));
	}

	//Find Selected Genres
    function getCats()
    {
        var cats = []; //Setup empty array
 
        $(".wayup_filter_check input:checked").each(function() {
            var val = $(this).val();
            cats.push(val); //Push value onto array
        });     
 
        return cats; //Return all of the selected genres in an array
    }

    function getPriceMin(){
    	var min_price=$("#priceMin").val();
    	return min_price;
    }

	function getPriceMax(){
		var max_price=$("#priceMax").val();
    	return max_price;
    }

    $(".wayup_filter_check input").on('change',function(){
    	wayup_get_posts();
    });

    $(document).on("click",".page-numbers",function(e){
    	e.preventDefault();
 
        var url = $(this).attr('href'); //Grab the URL destination as a string
       	var paged = url.split('&paged='); //Split the string at the occurance of &paged=

       	if(~url.indexOf('&paged=')){
       		paged=url.split('&paged=');
       	} else {
       		paged=url.split('/paged/');
       	}
 
        wayup_get_posts(paged[1]); //Load Posts (feed in paged value)
    });

    //If pagination is clicked, load correct posts
    /*$('a.page-numbers').on('click', function(e){
        e.preventDefault();
 
        var url = $(this).attr('href'); //Grab the URL destination as a string
        var paged = url.split('&paged='); //Split the string at the occurance of &paged=
 
        wayup_get_posts(paged[1]); //Load Posts (feed in paged value)
    });*/

	
	 //Main ajax function
    function wayup_get_posts(paged)
    {
        var paged_value = paged; //Store the paged value if it's being sent through when the function is called
        var ajax_url = wayup_settings.ajax_url; //Get ajax url (added through wp_localize_script)
 
        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'wayup_filter',
                category: getCats,
                min: getPriceMin, 
                max: getPriceMax, 
                //search: getSearchValue(), //Retrieve search value using function
                paged: paged_value //If paged value is being sent through with function call, store here
            },
            beforeSend: function ()
            {
                $('#main').html('wait');
            },
            success: function(data)
            {
                //Hide loader here
                $('#main').html(data);
            },
            error: function()
            {
                                //If an ajax error has occured, do something here...
                $("#main").html('<p>There has been an error</p>');
            }
        });
    }



});