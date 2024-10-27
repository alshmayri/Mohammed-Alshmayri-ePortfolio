window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: ""
	},
	axisY: {
		title: "Impacted Users"
	},
	axisX: {
		title: "Users Impacted "
	},
	data: [{        
		type: "column",  
		dataPoints: [ 
			{ y: 250000000, label: "Microsoft" },
			{ y: 533000000,  label: "Facebook" },
			{ y: 383000000, label: "Marriot Hotels" },
			{ y: 330000000,  label: "Twitter" },
			{ y: 1000000000,  label: "Yahoo" }
		]
	}]
});
chart.render();

}