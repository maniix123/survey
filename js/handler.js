function displayIndustry()
		{
			$('.foremployed').empty();
			$('.foremployed').append('<div class="panel panel-info" id="forEmployed">'+
				'<div class="panel-heading">'+
				'<h4>For employed and self-employed only:</h4>'+
				'</div>'+
				'<div class="panel-body">'+
				'<h2>Industry sector you belong:</h2>'+
				'<div class="form-group">'+ 
				'<div class="col-sm-10">'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Agriculture, Forestry, and Fishing">Agriculture, Forestry and Fishing</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Mining and Quarrying">Mining and Quarrying</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Manufacturing">Manufacturing</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Electricity, Gas, Steam and Airconditioning Supply">Electricity, Gas, Steam and Airconditioning Supply</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Water Supply; Sewerage, Waste Management and Remediation Activities">Water Supply; Sewerage, Waste Management and Remediation Activities</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Construction">Construction</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Wholesale and Retail; Repair of Motor Vehicles and Motor Cycles">Wholesale and Retail; Repair of Motor Vehicles and Motor Cycles</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Transport and Storage">Transport and Storage</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Accomodation and Food Service Activites">Accomodation and Food Service Activites</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Information and Communication">Information and Communication</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Financial and Insurance Activites">Financial and Insurance Activites</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Real Estate Activites">Real Estate Activites</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Professional, Scientific and Technical Activites">Professional, Scientific and Technical Activites</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Adminstrative and Support Service Activites">Adminstrative and Support Service Activites</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Education">Education</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Human Health and Social Work Activites">Human Health and Social Work Activites</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Arts, Entertainment and Recreation">Arts, Entertainment and Recreation</label> '+
				'</div>'+
				'<div class="checkbox">'+
				'<label><input type="checkbox" name="personIndustry[]" value="Other service activities">Other service activities</label> '+
				'</div>'+
				'</div>'+
				'</div>'+
				'</div>'+
				'</div>'+
				'<div class="panel panel-success">'+
				'<div class="panel-heading">'+
				'<h4>Employment/Business Location</h4>'+
				'</div>'+
				'<div class="panel-body">'+
				'<div class="form-group">'+ 
				'<div class="col-sm-10">'+
				'<div class="radio">'+
				'<label><input type="radio" name="personBusinessLocation" value="Within Iligan City" required>Within Iligan City</label> '+
				'</div>'+
				'<div class="radio">'+
				'<label><input type="radio" name="personBusinessLocation" value="Outside Iligan City" required>Outside Iligan City but within the Philippines</label> '+
				'</div>'+
				'<div class="radio">'+
				'<label><input type="radio" name="personBusinessLocation" value="Abroad" required>Abroad</label> '+
				'</div>'+								
				'</div>'+
				'</div>'+
				'</div>'+
				'</div>'+
				'<div class="panel panel-primary">'+
				'<div class="panel-heading">'+
				'<h4>Present Average Monthly Salary/Income:</h4>'+
				'</div>'+
				'<div class="panel-body">'+
				'<div class="form-group">'+ 
				'<div class="col-sm-10">'+
				'<div class="radio">'+
				'<label><input type="radio" name="personSalary" value="10,000 and below" required>10,000 and below</label> '+
				'</div>'+
				'<div class="radio">'+
				'<label><input type="radio" name="personSalary" value="10,001-20,000" required>10,001-20,000</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personSalary" value="20,001-30,000" required>20,001-30,000</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personSalary" value="30,001-40,000" required>30,001-40,000</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personSalary" value="40,001-50,000" required>40,001-50,000</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personSalary" value="50,001 and above" required>50,001 and above</label> '+
				'</div>'+
				'</div>'+
				'</div>'+		
				'</div>'+
				'</div>'+
				'<div class="panel panel-info">'+
				'<div class="panel-heading">'+
				'<h4>Number of jobs you have undertaken</h4>'+
				'</div>'+
				'<div class="panel-body">'+
				'<div class="form-group">'+ 
				'<label class="control-label col-sm-2" for="pwd">Number of Jobs:</label>'+
				'<div class="col-sm-10">'+
				'<select name="personNoOfJobs" class="form-control" required>'+
				'<option value="1">1</option>'+
				'<option value="2">2</option>'+
				'<option value="3">3</option>'+
				'<option value="4">4</option>'+
				'<option value="5">5</option>'+
				'<option value="6">6</option>'+
				'<option value="moreThanSix">Six Above</option>'+
				'</select>'+
				'</div>'+
				'</div>'+
				'<div class="form-group">'+
				'<label class="control-label col-sm-2" for="pwd">How long before you are employed:</label>'+
				'<div class="col-sm-10">'+
				'<select name="personLongEmployed" class="form-control" id="NoOfjobs" required>'+
				'<option value="6 months and below">6 months and below</option>'+
				'<option value="7 months - 1 year">7 months - 1 year</option>'+
				'<option value="More than 1 year - 2 years">More than 1 year - 2 years</option>'+
				'<option value="More than 2 years - 3 years">More than 2 years - 3 years</option>'+
				'<option value="More than 3 years and above">More than 3 years and above</option>'+
				'</select>'+
				'</div>'+
				'</div>'+
				'</div>'+
				'</div>'+
				'<div class="panel panel-primary">'+
				'<div class="panel-heading">'+
				'<h4>Nature of your work</h4>'+
				'</div>'+
				'<div class="panel-body">'+
				'<div class="form-group">'+ 
				'<div class="col-sm-10">'+
				'<div class="radio">'+
				'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Chief Operating Officer" required>Chief Operating Officer</label> '+
				'</div>'+
				'<div class="radio">'+
				'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Facilities Coordinator" required>Facilities Coordinator</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Management Consultant" required>Management Consultant</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Manager" required>Manager</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Operations Research Analyst" required>Operations Research Analyst</label> '+
				'</div>'+	
				'<div class="radio" id="otherPosition">'+
				'<label><input type="radio" name="personWorkPosition" onclick="displayOtherPositionInput()" value="Others">Others (please specify)</label><input type="text" name="otherWorkPosition" placeholder="Type here" class="form-control hide" id="otherPositionField" style = "margin-top: 10px;"/>'+
				'</div>'+
				'</div>'+
				'</div>'+							
				'</div>'+
				'</div>'+
				'<div class="panel panel-success">'+
				'<div class="panel-heading">'+
				'<h4>Present Organizational Status</h4>'+
				'</div>'+
				'<div class="panel-body">'+
				'<div class="form-group">'+ 
				'<div class="col-sm-10">'+
				'<div class="radio">'+
				'<label><input type="radio" name="personOrganizationalStatus" value="Rank and File" required>Rank and File</label> '+
				'</div>'+
				'<div class="radio">'+
				'<label><input type="radio" name="personOrganizationalStatus" value="Supervisory" required>Supervisory</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personOrganizationalStatus" value="Middle Manager" required>Middle Manager</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personOrganizationalStatus" value="Top Level Manager" required>Top Level Manager</label> '+
				'</div>'+	
				'<div class="radio">'+
				'<label><input type="radio" name="personOrganizationalStatus" value="Management" required>Management</label> '+
				'</div>'+	
				'</div>'+
				'</div>'+							
				'</div>'+
				'</div>'
				);
}
function removeOtherPositionField()
{
	$('#otherPositionField').addClass('hide');
}
function displayOtherPositionInput()
{
	$('#otherPositionField').removeClass('hide');
}
function emptyForEmployed()
{
	$('.foremployed').empty();
}
function validate()
{
	var inputName = $('#personName').val();
	if(inputName.length < 5)
	{
		$('#submitButton').addClass('hide');
	}
	else{
		$('#submitButton').removeClass('hide');
	}
}