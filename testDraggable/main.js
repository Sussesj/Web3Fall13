$(function () {
	/* basic */
	$("#dragbasic div[id^='drag']").draggable({
		containment: "#dragbasic",
		stack: ".drag"
	});

	/* X axis only */
	$("#drag-x div[id^='drag']").draggable({
		containment: "#drag-x",
		stack: ".drag",
		axis: "x"
	});

	/* Y axis only */
	$("#drag-y div[id^='drag']").draggable({
		containment: "#drag-y",
		stack: ".drag",
		axis: "y"
	});


	/* make draggable div always on top */
	$("div[id^='drag']").mousedown(function () {
		$("div[id^='drag']").each(function () {
			var seq = $(this).attr("id").replace("drag", "");
			$(this).css('z-index', seq);
		});
	});
});
