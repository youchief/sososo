(function($) {
	
	var methods = {
		//public function
		getStream:function(){
			var _this = this;
			$(this).Tumblr('API', undefined, function(data){
				$(_this).Tumblr('_loadData', data);
			});
		},
		getTag:function(){},
		API:function(url, callback){
			var $self = $(this);
			$self.trigger('loading');
			
			url = (url == undefined) ? '&callback=?&num=50':url;
			
			$.getJSON(settings.APIPath+url, function(data) {
				$self.trigger('loaded');
				if(callback) {
					callback(data);
				}
			});
		},
		//private functions
		_loadData:function(data, types) {
			types = (types != undefined) ? types:'all';
			
			$(this).html('');
			for(var post in data.posts){
				if(types == 'all' || $.inArray(data.posts[post]["type"], types) != -1) {
					var item = $(settings.template).clone();
					//item.find('.tumblr-type').html(data.posts[post]["type"]);
					item.find('.tumblr-date').html(data.posts[post]["date"]);
					item.find('.tumblr-url').html(data.posts[post]["url"]);
					item.find('.tumblr-id').html(data.posts[post]["id"]);
					item.find('.tumblr-tags').html(data.posts[post].tags);
					item.find('.tumblr-breadcrumbs').html("Posted: " + data.posts[post]["date"] + "<br>Tags: " + data.posts[post].tags);
					
					switch(data.posts[post]["type"]){
						case 'regular':
							item.addClass('tumblr-regular');
							item.find('.tumblr-title').html(data.posts[post]["regular-title"]);
							item.find('.tumblr-body').html(data.posts[post]["regular-body"]);
							break;
						case 'answer':
							item.addClass('tumblr-answer');
							item.find('.tumblr-title').html(data.posts[post].answer);
							item.find('.tumblr-body').html(data.posts[post].question);
							break;
						case 'photo':
							item.addClass('tumblr-photo');
							var text = data.posts[post]["photo-caption"];
							
							item.find('.tumblr-title').html("Image time!");
							item.find('.tumblr-body').html('<img src="'+data.posts[post]["photo-url-400"]+'">' + text);
							break;
					}
					this.append(item);
					item.fadeIn();
				}//endif
			}//end for each
		}//end func
	};
	
	var settings = {
		key:'',
		blogName:'',
		APIPath:'',
		template:'#entryTemplate',
	};
	
	//where did i leave off??
	//implement various sorting
	//implement loader
	//figure oure a menue design
	
	$.fn.Tumblr = function(arg) {
		if(typeof(arg) == 'object') {
			settings = $.extend(settings , arg);
			settings.APIPath = "http://"+arg.blogName+".tumblr.com/api/read/json?"
		} else if(typeof(arg) == 'string') {
		    if ( methods[arg] ) {
		      return methods[arg].apply( this, Array.prototype.slice.call( arguments, 1 ));
		    } else if ( typeof arg === 'object' || ! arg ) {
		      return methods.init.apply( this, arguments );
		    } else {
		      $.error( 'Method ' +  arg + ' does not exist on jQuery.tooltip' );
		    }
		}
	};
	
})( jQuery );