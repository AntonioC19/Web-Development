function updateOutput() {
	$("iframe").contents().find("html").html("<html><head><style type='text/css'>" + $("#cssText").val() + "</style></head><body>" + $("#htmlText").val() + "</body></html>");
		
}
$(".toggleButton").hover( function() {
	$(this).addClass("highlightedButton");
},
function() {
	$(this).removeClass("highlightedButton");
});
$(".toggleButton").click( function() {
	$(this).toggleClass("active");

	$(this).removeClass("highlightedButton");

	var panelId = $(this).attr("id") + ("Text");

	$("#" + panelId).toggleClass("hidden");

	var numberOfActivePanels = 4 - $('.hidden').length;

	$(".panel").width(($(window).width() / numberOfActivePanels) - 10);
});

$(".panel").height($(window).height() - $("#header").height() - 15);

$(".panel").width(($(window).width() /2) - 10);

updateOutput();


$("textarea").on("change keyup paste", function(){

	updateOutput();

});
$("textarea").on("change", function(){

	document.getElementById("outputText").contentWindow.eval($("#javascriptText").val());

});