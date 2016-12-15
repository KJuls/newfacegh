<!DOCTYPE html>
<html>
<head>
<title>form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/kube.framework.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<section class="appHeader">
	<div class="container">
    <div class="row">
    <div class="col col-6">Event details</div>
    <div class="col col-6">Nav</div>
    </div>
    </div>
</section>
<section class="appSection form">
	<div class="container">
    <!--<div class="row">
    <div class="col col-6">
   	<form>
    <fieldset>
    <legend>Where</legend>
    <input type="text" placeholder="Enter a Location"/>
    </fieldset>
    
    <fieldset>
    <legend>Calender</legend>
    <select>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    </select>
    </fieldset>
    
    <fieldset>
    <legend>Video Call</legend>
    <input type="text">
    </fieldset>
    
    <fieldset>
    <legend>Description</legend>
    <textarea placeholder="Enter a desciption"></textarea>
    </fieldset>
    
    <fieldset>
    <legend>Attachment</legend>
    <input type="file">
    </fieldset>
    
    <fieldset>
    <legend>Event Color</legend>
    <div class="event-color">
    <div class="box red"></div>
    </div>
    </fieldset>
    
    </form>
    </div>
    
    <div class="col col-6">
    <form>
    <fieldset>
    <legend>ADD GUESTS</legend>
    <input type="text" placeholder="Enter guest e-mail address"/><button type="submit">Add</button>
    </fieldset>
    
    <fieldset>
    <legend>Guest Can</legend>
    <div><input type="checkbox">Modify event</div>
    <div><input type="checkbox">Invite others</div>
    <div><input type="checkbox">See guest list</div>
    </fieldset>
    </form>
    </div>
    </div>-->
    
    <div class="row">
    <div class="col col-6">
    <form method="post" action="#" class="form loopui-form"> 
    <div class="form-item stacked">
			<div>
				<label>Where</label>
				<input type="text" name="location"  value="" placeholder="Enter a location">	
			</div>
			<div>
				<label>Calender</label>
				<select class="loopui-calender">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                </select>	
			</div>
			<div>
				<label>Video Call</label>
				<input type="text" name="video_call"  value="">
			</div>
			<div>
				<label>Description</label>
				<textarea rows="6" name="description" value="" placeholder="Enter a description"></textarea>
            </div>
            <div>
            <label>Attachement</label><hr>
				<input type="file">
			</div>
		</div>
    </form>
    </div>
    
    <div class="col col-6 last-child">
    <form method="post" action="#" class="form loopui-form">
    <div class="form-item stacked">
    <div>
    <label>Add Guest</label>
	<input type="text" name="guest_email"  value="" placeholder="Enter guest e-mail address">
    </div>
    
    <div>
    <label>Guest Can</label><hr>
    <div><input type="checkbox" value="modifiy_evnt">Modify event</div>
    <div><input type="checkbox" value="invite_others">Invite others</div>
    <div><input type="checkbox" value="see_guest_list">See guest list</div>
    </div>
    
    <div class="guest-section">
    <hr>
    <p>By default this event will follow the <a href="#">sharing settings</a> of this calender: 
    event details will be visible to anyone who can see details of other events in this calender. 
    <a href="#">Learn more</a></p>
    </div>
    <div>
    </div>
    </div>
    </form>
    </div>
    
    
    </div>
</section>
</body>
</html>