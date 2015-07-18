$( document ).ready(function() {

    $("img.lazy").lazyload({
		threshold : 100,
		effect : "fadeIn"	
	});

	//portfolio
    $('#white-white-red-hero, #white-white-red .project-info').on('click', function() {
		window.location.href = 'http://www.sheripark.com/portfolio/white-white-red/';
	});
	
	$('#as-i-am-changing-hero, #as-i-am-changing .project-info').on('click', function() {
		window.location.href = 'http://www.sheripark.com/portfolio/as-i-am-changing/';
	});
	
	
	//archive
	$('#genesis-dreamtime-hero, #genesis-dreamtime .project-info').on('click', function() {
		window.location.href = 'http://www.sheripark.com/archive/genesis-and-dreamtime/';
	});
	
	$('#stack-through-hero, #stack-through .project-info').on('click', function() {
		window.location.href = 'http://www.sheripark.com/archive/stack-through/';
	});
	
	$('#still-hanoi-hero, #still-hanoi .project-info').on('click', function() {
		window.location.href = 'http://www.sheripark.com/archive/still-hanoi-move/';
	});
	
	$('#today-fri-sat-sun-hero, #today-fri-sat-sun .project-info').on('click', function() {
		window.location.href = 'http://www.sheripark.com/portfolio/Today-Friday-Saturday-Sunday/index.html';
	});
  
    $('#index-hero').on('click', function() {
        window.location.href = 'https://www.indiegogo.com/projects/reorient-home-is-where#/story';
    });
});

