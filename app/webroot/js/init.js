$(document).on('ready', function(){
	$('#container').Tumblr({
		'blogName':'sososomagazine',
		'key':''
	});
	$('#container').Tumblr('getStream');
});