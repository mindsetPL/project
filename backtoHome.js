function backtoHome()
{
	var currentpage = window.document.toString();
	var currenturl = window.location.href;
	var pageData = window.document.toString();
	history.replaceState(pageData, "dummyurl", "index.html");
	history.pushState(currentpage, "currenturl", currenturl);
}
window.addEventListener('popstate', function(event) {
	window.location.reload(true);
});