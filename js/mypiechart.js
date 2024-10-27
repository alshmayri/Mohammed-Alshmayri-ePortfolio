window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 20, label: "Analyis"},
			{y: 20, label: "Design"},
			{y: 30, label: "Construction"},
			{y: 20, label: "Testing"},
			{y: 10, label: "Maintenance"}
		]
	}]
});
chart.render();

}