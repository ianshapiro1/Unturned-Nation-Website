

/* XML and javascript for changing group data*/
var fs = require('fs'),
xml2js = require('xml2js')

parser = new xml2js.Parser()
fs.readFile('C:\Program Files (x86)\Steam\steamapps\common\Unturned\Servers\washingtonpvp\Rocket' + '\Permissions.config', function(err, data) {
    parser.parseString(data, function (err, result) {
        console.dir(result);
        console.log('Done');
    });
});
