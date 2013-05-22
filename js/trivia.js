var Unchained = window.Unchained || {}; Unchained.Trivia = Unchained.Trivia || {};
Unchained.Trivia = {
	burstDelayMs:5000,
	fadeOutMs:2000,
	fadeInMs:2000,
    init: function(){
    	if($('#burst-trivia').length>0){
			Unchained.Trivia.startBurstDelay();
		}
	},
    startBurstDelay: function(){
    	//console.log('startBurstDelay');
    	setTimeout ( "Unchained.Trivia.updateBurst()", Unchained.Trivia.burstDelayMs );
	},
    updateBurst: function(){
    	//console.log('Trivia updateBurst');
    	var $burst = $('#burst-trivia');
    	var $text = $burst.find('p');
    	var $list = $burst.find('ul');
    	var current = parseInt($list.data('current'));
    	var upper = parseInt($list.data('upper'));
    	var next = current + 1;
    	if(current==upper){
    		next = 0;
    	}
    	var $nextItem = $list.find('li[data-index=' + next + ']');
    	var nextText = $nextItem.text();

    	var output = '';
    	output += 'current: ' + current + '\n';
    	output += 'upper: ' + upper + '\n';
    	output += 'next: ' + next + '\n';
    	output += 'nextText: ' + nextText + '\n';
    	//console.log(output);

    	Unchained.Trivia.changeTriviaItem($text,nextText,$list,next);
	},

    changeTriviaItem: function($text,nextText,$list,next){
    	//console.log('changeTriviaItem',$text,nextText);
    	$text.animate(
    		{ opacity: 0 },
    		Unchained.Trivia.fadeOutMs,
    		function(){
    			//console.log('anim complete');
    			$text.text(nextText).animate(
    				{ opacity:1 },
    				Unchained.Trivia.fadeInMs,
    				function(){
    					//console.log('anim2 complete',$list.data('current'));
    					$list.data('current',next);
    					//console.log('anim2 complete',$list.data('current'));
    					Unchained.Trivia.startBurstDelay();
    				}
    			);
    		}
		);
	}
};

$( document ).ready(function() {
  Unchained.Trivia.init();
});
