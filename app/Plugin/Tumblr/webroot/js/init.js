$(document).on('ready', function(){
	$('#blogHolder').Tumblr({
		'blogName':'sebbdk',
		'key':'5Ama9LlyXtjKD168VHRySCD5o4Xb8YgraHFznjGnzITmfFF2HY'
	});
	$('#blogHolder').Tumblr('getStream');
});