var path = require('path');

app.get('*.', function(req, res) {
	res.sendFile(path.join(_dirname, '/views/'), 'index.ejs'));

});