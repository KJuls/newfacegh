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
    <div class="row">
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
    </div>
    </div>
</section>
</body>
</html>