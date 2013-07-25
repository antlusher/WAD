$(document).ready(function() {
	$('.search_field').keyup(function() {
	var search_term = $(this).attr('value');
			$.post('./ajax/search.php', {search_term:search_term}, function(data) {
				$('.result').html(data);
				
				$('.result li').click(function ()	{
					var result_value = $(this).text();
					$('.search_field').attr('value', result_value);
					$('.result').html('');

			});
		});
	});
});


$(document).ready(function() {
	$('.sport_search_field').keyup(function() {
	var sport_search_term = $(this).attr('value');
			$.post('./ajax/search.php', {sport_search_term:sport_search_term}, function(data) {
				$('.sport_result').html(data);
				
				$('.sport_result option').click(function ()	{
					var sport_result_value = $(this).text();
					$('.sport_search_field').attr('value', sport_result_value);
					$('.sport_result').html('');

			});
		});
	});
});