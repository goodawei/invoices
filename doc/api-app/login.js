var hooks = require('hooks');
var fs = require('fs');

hooks.beforeEach(function(test, done) {
    test.request.headers['x-jbh-pass'] = 'allown'
    return done();
});

hooks.before('POST /account/unbindCardFile/upload -> 200', function(test, done) {
    test.request.headers['Content-Type'] = 'binary/octet-stream';
    return done();
});

