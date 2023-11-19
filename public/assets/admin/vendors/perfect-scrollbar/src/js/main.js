'use strict';

var destroy = require('./plugin/destroy.js');
var initialize = require('./plugin/initialize.js');
var update = require('./plugin/update.js');

module.exports = {
  initialize: initialize,
  update: update,
  destroy: destroy
};
