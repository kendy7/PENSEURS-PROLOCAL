
  var carrousel={
	
	nbSide : 0,
	nbCurrent : 1,
	elemCurrent : null,
	elem : null,
	timer : null,
	num : 0, 
	
	init: function(elem)
	{
		this.nbSide=elem.find('.slide').length;
		// creation de la pagination
		elem.append('<div class="navigation"> </div>');
		var i;
		for(i=1;i<=this.nbSide;i++)
		{
			elem.find('.navigation').append('<span>'+i+'</span>');
		}
		
		elem.find('.navigation span').click(function()
		{ 
		    carrousel.gotoSide($(this).text()); 
			
		})
		
		
		//initialisation du carousel
		
		this.elem=elem;
		elem.find('.slide').hide();
		elem.find('.slide:first').show();
		this.elemCurrent=elem.find('.slide:first');
		this.elem.find('.navigation span:first').addClass('active');
		
	
		
		
		//On cree le timer
		this.timer = window.setInterval('carrousel.next()',5000);
	},
	
	 gotoSide : function(num)
	{   if(num==this.nbCurrent)
	    {
			return false;
		}
		
		 this.elemCurrent.fadeOut();
		 this.elem.find('#slide'+num).fadeIn();
		 this.elem.find('.navigation span').removeClass('active');
		 this.elem.find('.navigation span:eq('+(num-1)+')').addClass('active');
		 this.nbCurrent = num;
		 this.elemCurrent = this.elem.find('#slide'+num);	

	},
	
	next : function()
	{
		var num = this.nbCurrent+1;
		if(num > this.nbSide)
		{
			num = 1;
	    
		}
		this.gotoSide(num);
	}
	
	
 }     
	  
$(function(){
	carrousel.init($('#carrousel'));
	
});		






