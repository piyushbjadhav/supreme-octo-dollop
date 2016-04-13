// var el = document.getElementById('ticker');
// var ticker = new TickerScrambler(el, {list: ['community','conversation','inspiration']});

$(function (){ 
	$("#fllix-is #ticker").TickerScrambler(
		{
			list:['movies','entertainment','community']
		}
	); 
});