$("#siteSearch").on("opened.zf.offcanvas", function () {
	$('#search-term').focus();
	if( !$('#search-term').is(':focus') ) {
		$('#search-term').focus();
	}	
	console.log('hit');
});