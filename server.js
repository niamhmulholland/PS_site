var express = require('express');
var app = express();

// set the port of our application
// process.env.PORT lets the port be set by Heroku
var port = process.env.PORT || 8080;

// set the view engine to ejs
app.set('view engine', 'ejs');

// make express look in the public directory for assets (css/js/img)
app.use(express.static(__dirname + '/public'));

// set the home page route
app.get('/', function(req, res) {

    // ejs render automatically looks in the views folder
    res.render('pages/index');
});

// about page 
app.get('/about', function(req, res) {
    res.render('pages/about');
});

// about page 
app.get('/about2', function(req, res) {
    res.render('pages/about2');
});

app.listen(port, function() {
    console.log('Our app is running on http://localhost:' + port);
});