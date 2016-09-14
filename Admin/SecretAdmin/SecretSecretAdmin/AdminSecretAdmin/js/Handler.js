
$(document).ready(function(){
	$('#userTable').DataTable({
		dom: 'lBfrtip',
		buttons: ['csv', 'excel', 'pdf', "print"],
	});
	var schoolYear = new Array(), dataArray = new Array(), colorArray = new Array();
	var i = 0;
	$.ajax({
		url: 'renderChart.php',
		method: 'POST',
		data: {option : 'displayAll'},
		success : function(data)
		{
			var jsonData = JSON.parse(data);
			var total = jsonData[jsonData.length -1].Total;
			for(i = 0; i < jsonData.length; i++)
			{
				schoolYear.push(jsonData[i].SchoolYear);
				dataArray.push(jsonData[i].TotalStudents);
				colorArray.push('rgba(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.random() + 0.1) +')');
			}
			document.getElementById('total').innerHTML = total;
			var ctx = document.getElementById("myChart");
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: schoolYear,
					datasets: [{
						label: 'Overview',
						data: dataArray,
						backgroundColor: colorArray,
						borderColor: colorArray,
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		}
	});
});
function displayBySchoolYear(scholYearData)
{
	var EmploymentStatus = new Array(), dataArray = new Array(), colorArray = new Array();
	var i = 0;
	$.ajax({
		url: 'renderChart.php',
		method: 'POST',
		data: {option : 'displayBySchoolYear', schoolyear : scholYearData},
		success : function(data)
		{
			if(data == 'No results match your query..')
			{
				$('.barGraphContainer').empty();
				$('.barGraphContainer').html('<h3 class="text-center">'+data+'</h3>');
			}
			else
			{
				$('.barGraphContainer').empty();
				var jsonData = JSON.parse(data);
				var total = jsonData[jsonData.length -1].Total;
				for(i = 0; i < jsonData.length; i++)
				{
					EmploymentStatus.push(jsonData[i].EmploymentStatus);
					dataArray.push(jsonData[i].TotalStudents);
					colorArray.push('rgba(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.random() + 0.1) +')');
				}
// document.getElementById('total').innerHTML = total;
$('.barGraphContainer').append('<canvas id="barChart"><canvas>');
var ctx = document.getElementById("barChart");
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: EmploymentStatus,
		datasets: [{
			label: scholYearData,
			data: dataArray,
			backgroundColor: colorArray,
			borderColor: colorArray,
			borderWidth: 1
		}]
	},
	options: {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true
				}
			}]
		}
	}
});
}
}
});
}
